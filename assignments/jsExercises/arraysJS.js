/**
 * Created by John on 2/6/2015.
 */

var container = [];

function addArrayItem(inputFieldLoc, arrayFieldLoc, isNumericLoc, minMaxLoc) {
    var inputLoc = document.getElementById(inputFieldLoc);
    var outputLoc = document.getElementById(arrayFieldLoc);
    var isNumeric = document.getElementById(isNumericLoc);
    var minMaxOut = document.getElementById(minMaxLoc);
    if (inputLoc.value != "")
        container.push(inputLoc.value);
    displayAll(container, outputLoc, isNumeric, minMaxOut);
}

function removeArrayItem(inputFieldLoc, arrayFieldLoc, isNumericLoc, minMaxLoc) {
    var inputLoc = document.getElementById(inputFieldLoc);
    var outputLoc = document.getElementById(arrayFieldLoc);
    var isNumeric = document.getElementById(isNumericLoc);
    var minMaxOut = document.getElementById(minMaxLoc);
    if (inputLoc.value != "")
        container.splice(inputLoc.value, 1);
    displayAll(container, outputLoc, isNumeric, minMaxOut);
}

function displayAll(inputArr, outputLoc, isNumeric, minMaxOut) {
    var outputString = "";
    for (var x = 0; x < inputArr.length; x++) {
        outputString += container[x].toString() + ", ";
    }
    outputString = outputString.substring(0, outputString.length - 2);
    outputLoc.innerHTML = "[" + outputString + "]\r\n";
    displayIsNumeric(isArrNumeric(inputArr), isNumeric, inputArr);
    displayMinMax(isNumeric, minMaxOut, inputArr);
}

function isArrNumeric(array) {
    for (var y = 0; y < array.length; y++) {
        if (!(!isNaN(parseFloat(array[y])) && isFinite(array[y])))
            return false;
    }
    return true;
}

function displayIsNumeric(isTrue, isNumeric, array) {
    if (array.length == 0) {
        isNumeric.textContent = "No values to compare";
    }
    else if (isTrue) {
        isNumeric.textContent = "All values ARE numeric";
    } else {
        isNumeric.textContent = "NOT all values are numeric";
    }
}

function displayMinMax(isTrue, minMaxOut, array) {
    var minMaxLoc = minMaxOut;
    var biggest = 0;
    var smallest = 0;
    var currentVal = 0;
    if (isTrue) {
        if (array.length > 0) {
            currentVal = parseFloat(array[0]);
            biggest = currentVal;
            smallest = currentVal;
            for (var z = 1; z < array.length; z++) {
                currentVal = parseFloat(array[z]);
                if (biggest < currentVal) {
                    biggest = currentVal;
                }
                else if (smallest > currentVal) {
                    smallest = currentVal;
                }
            }
        } else {
            minMaxLoc.textContent = "[/]";
            return;
        }
    } else {
        if (array.length > 0) {
            currentVal = array[0].toString();
            biggest = currentVal;
            smallest = currentVal;
            for (var c = 1; c < array.length; z++) {
                currentVal = array[c].toString();
                if (biggest < currentVal) {
                    biggest = currentVal;
                }
                else if (smallest > currentVal) {
                    smallest = currentVal;
                }
            }
        } else {
            minMaxLoc.textContent = "[/]";
            return;
        }
    }
    minMaxLoc.textContent = "[Min/Max] = [" + smallest.toString() + "/" + biggest.toString() + "]";
}

function searchArray(inputLoc, outputLoc) {
    var inputId = document.getElementById(inputLoc);
    var input = inputId.value;
    var outputId = document.getElementById(outputLoc);
    var numCount = 0;
    var count = "once";
    var locations = "(";
    var locationArr = [];

    if (input != "") {
        for (var a = 0; a < container.length; a++) {
            if (input == container[a]) {
                numCount++;
                locationArr.push(a);
            }
        }
        if (numCount > 1) {
            switch (numCount) {
                case 2:
                    count = "twice";
                    break;
                case 3:
                    count = "thrice";
                    break;
                default :
                    count = numCount.toString() + " times";
            }
            for (var b = 0; b < locationArr.length - 1; b++) {
                locations += locationArr[b].toString() + ", ";
            }
            locations = locations.substring(0, locations.length - 2) + " and " + locationArr[locationArr.length - 1] + ")";
            outputId.textContent = input.toString() + " appears " + count.toString() + " at: " + locations;
        } else {
            outputId.textContent = input.toString() + " appears at: (" + a.toString() + ")";
        }
    }
}