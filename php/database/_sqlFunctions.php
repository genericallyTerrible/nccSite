<?php
$serverAddress = "23.253.61.96";
$username = "ncMerkel";
$password = "A00944882;";
$errorMsg;
$lastQuery;

//Pure HTML
function doTableLinks() {
    return '<table id="dbNav">
            <tr>
              <td>
                <a href="php/database/ViewTable.php" target="WarFrame">View Table</a>
              </td>
              <td>
                <a href="php/database/InsertIntoTable.php" target="WarFrame">Add to the Table</a>
              </td>
              <td>
                <a href="php/database/RemoveFromTable.php" target="WarFrame">Remove an Entry</a>
              </td>
              <td>
                <a href="php/database/UpdateTable.php" target="WarFrame">Update an Entry</a>
              </td>
            </tr>
          </table>';
}

function doCreateEntry() {
    $generatedContent = '
<div id="sqlFormDiv">
    <form method="POST">
        <fieldset id="sqlFieldset">
            <p><label for="ID">ID:</label><input type="number" name="ID" /></p>
            <p><label for="FirstName">First Name:</label><input type="text" name="FirstName"/></p>
            <p><label for="LastName">Last Name:</label><input type="text" name="LastName"/></p>
            <p><label for="SubmitButton" id="submitSpacing">&nbsp;</label><input type="submit" name="SubmitButton"/></p>
        </fieldset>
    </form>';

    if (isset($_POST['SubmitButton'])) {
        $id = $_POST['ID'];
        $LastName = $_POST['LastName'];
        $FirstName = $_POST['FirstName'];
        $newEntry = createEntry($id, $LastName, $FirstName);
        if ($newEntry != null) {
        $generatedContent .= $newEntry;
        } else {
            $generatedContent .= '<div id="submissionResults"><p>Submission Error:&nbsp;</p><p>' . $GLOBALS['errorMsg'] . '</p><p>'. $GLOBALS['lastQuery'] . '</p></div>';
        }
    }

    $generatedContent .= '</br></div>';

    return $generatedContent;
}

function doRemoveEntry() {
    $generatedContent = '
<div id="sqlFormDiv">
    <form method="POST">
        <fieldset id="sqlFieldset">
            <p><label for="ID">ID:</label><input type="number" name="ID" /></p>
            <p><label for="SubmitButton" id="submitSpacing">&nbsp;</label><input type="submit" name="SubmitButton"/></p>
        </fieldset>
    </form>';

    if(isset($_POST['SubmitButton'])) {
        $id = $_POST['ID'];
        $entryRemoved = removeEntry($id);
        if ($entryRemoved != null) {
            $generatedContent .= $entryRemoved;
        } else {
            $generatedContent .= '<div id="submissionResults"><p>Submission Error:&nbsp;</p><p>' . $GLOBALS['errorMsg'] . '</p><p>'. $GLOBALS['lastQuery'] . '</p></div>';
        }
    }
    $generatedContent .= '</br></div>';

    return $generatedContent;
}

function doUpdateEntry() {
    $generatedContent = '
<div id="sqlFormDiv">
    <form method="POST">
        <fieldset id="sqlFieldset">
            <p><label for="ID">Current ID:</label><input type="number" name="ID" /></p>
            <p><label for="NewId">New ID:</label><input type="number" name="NewId" /></p>
            <p><label for="FirstName">First Name:</label><input type="text" name="FirstName"/></p>
            <p><label for="LastName">Last Name:</label><input type="text" name="LastName"/></p>
            <p><label for="SubmitButton" id="submitSpacing">&nbsp;</label><input type="submit" name="SubmitButton"/></p>
        </fieldset>
    </form>';

    if (isset($_POST['SubmitButton'])) {
        $oldId = $_POST['ID'];
        $newId = $_POST['NewId'];
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $updatedEntry = updateEntry($oldId, $newId, $LastName, $FirstName);
        if ($updatedEntry != null) {
            $generatedContent .= $updatedEntry;
        } else {
            $generatedContent .= '<div id="submissionResults"><p>Submission Error:&nbsp;</p><p>' . $GLOBALS['errorMsg'] . '</p><p>'. $GLOBALS['lastQuery'] . '</p></div>';
        }
    }

    $generatedContent .= '</br></div>';

    return $generatedContent;
}

function openConnection() {
    // Create connection
    $conn = new mysqli($GLOBALS['$serverAddress'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['username']);
    if ($conn->connect_error) {
        echo '<script>alert("Connection error")</script>';
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function closeConnection($conn) {
    $conn->close();
}

function generateTable($result) {

    //Print to HTML
    $generatedContent = '<div id="sqlTableSuperDiv"><div id="sqlTableDiv"><table id="sqlTable">' .
        "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>";
    $counter = 0;
    while($row = $result->fetch_assoc()) {
        if($counter++ % 2 == 0) {
            $generatedContent .= '<tr>';
        } else {
            $generatedContent .= '<tr class="alt">';
        }
        foreach($row as $item) {
            $generatedContent .= "<td>$item</td>";
        }
        $generatedContent .= '</tr>';
    }

    $generatedContent .= '</table></div></div>';

    return $generatedContent;
}

function selectWholeTable() {
    $conn = openConnection();
    if($conn) {

        //Query
        $query = "SELECT * FROM ncMerkel.testTable";
        $result = $conn->query($query);

        if($result) {
            $generatedContent = generateTable($result);
            if($generatedContent != null){
                closeConnection($conn);
                return $generatedContent;
            }
        }

        closeConnection($conn);
        return null;
    }
    return null;
}

function createEntry($id, $lastName, $firstName) {
    $conn = openConnection();
    if ($conn) {
        //Query
        $query = "INSERT INTO ncMerkel.testTable (ID, LastName, FirstName) VALUES ('$id', '$lastName', '$firstName');";
        if ($conn->query($query)) {
            closeConnection($conn);
            return '<div id="submissionResults">
             <p>ID = "'         . $id        . '"</p>' .
            '<p>Last Name = "'  . $lastName  . '"</p>' .
            '<p>First Name = "' . $firstName . '"</p>
            </div>';
        } else {
            echo '<script>alert("Error: ' . $query . "\\n\\n" . $conn->error . '")</script>';
            $GLOBALS['errorMsg']  = $conn->error;
            $GLOBALS['lastQuery'] = $query;
        }
        closeConnection($conn);
    }
    return null;
}

function removeEntry($id) {
    $conn = openConnection();
    if ($conn) {
        //Query
        $query = "DELETE FROM ncMerkel.testTable WHERE ID=$id";
        if ($conn->query($query)) {
            closeConnection($conn);
            return '<div id="submissionResults">
             <p>ID Removed= "' . $id . '"</p>
            </div>';
        } else {
            echo '<script>alert("Error: ' . $query . "\\n\\n" . $conn->error . '")</script>';
            $GLOBALS['errorMsg']  = $conn->error;
            $GLOBALS['lastQuery'] = $query;
        }
        closeConnection($conn);
    }
    return null;
}

function updateEntry($oldId, $newId, $lastName, $firstName) {
    $conn = openConnection();
    if ($conn) {
        //Query
        $query = "UPDATE ncMerkel.testTable SET ";
        if(!empty($newId)) {
            $query .= "ID='$newId', ";
        }
        if(!empty($firstName)) {
            $query .= "FirstName='$firstName', ";
        }
        if(!empty($lastName)) {
            $query .= "LastName='$lastName', ";
        }
        $query = rtrim($query, ", ");

        $query .= " WHERE ID='$oldId';";
        if ($conn->query($query)) {
            closeConnection($conn);
            return '<div id="submissionResults">
             <p>Old ID = "'     . $oldId     . '"</p>' .
            '<p>New ID = "'     . $newId     . '"</p>' .
            '<p>First Name = "' . $firstName . '"</p>'  .
            '<p>Last Name = "'  . $lastName  . '"</p>
            </div>';
        } else {
            echo '<script>alert("Error: ' . $query . "\\n\\n" . $conn->error . '")</script>';
            $GLOBALS['errorMsg']  = $conn->error;
            $GLOBALS['lastQuery'] = $query;
        }
        closeConnection($conn);
    }
    return null;
}