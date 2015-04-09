//Determines if numeric. Returns a boolean
//
function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

//Find Min Max exercise
//
function FindMinMax(tbidArg1, tbidArg2, dividAnsTop, dividAnsBot, minMaxId) {
    var a = document.getElementById(tbidArg1).value;
    var b = document.getElementById(tbidArg2).value;
    var AnswerTop = document.getElementById(dividAnsTop);
    var AnswerBottom = document.getElementById(dividAnsBot);
    var minMaxIdLoc = document.getElementById(minMaxId);
    if (!a.match(/\S/) || (!b.match(/\S/))) {
        AnswerTop.textContent = 'Please put text';
        AnswerBottom.textContent = 'in both fields';
    }
    else {
        var aInt = parseFloat(a),
            bInt = parseFloat(b);
        if (isNumeric(aInt) && isNumeric(bInt)) {
            minMaxIdLoc.innerHTML = "<u>Min:</u><br> Max:";
            if (aInt < bInt) {
                AnswerTop.textContent = aInt.toString();
                AnswerBottom.textContent = bInt.toString();
                minMaxIdLoc.innerHTML = "<u>Min:</u><br> Max:";
            }
            else if (bInt < aInt) {
                AnswerTop.textContent = bInt.toString();
                AnswerBottom.textContent = aInt.toString();
                minMaxIdLoc.innerHTML = "<u>Min:</u><br> Max:";
            }
            else if (aInt == bInt) {
                AnswerTop.textContent = 'The two values are equal';
                AnswerBottom.textContent = "";
                minMaxIdLoc.innerHTML = "";
            }
            else {
                AnswerTop.textContent = "Error in input";
                AnswerBottom.textContent = "";
                minMaxIdLoc.innerHTML = "";
            }
        } else {
            if (a < b) {
                AnswerTop.textContent = a;
                AnswerBottom.textContent = b;
                minMaxIdLoc.innerHTML = "<u>Lexicographically:</u> <br> comes before";
            } else if (b < a) {
                AnswerTop.textContent = b;
                AnswerBottom.textContent = a;
                minMaxIdLoc.innerHTML = "<u>Lexicographically:</u> <br> comes before";
            } else if (a == b) {
                AnswerTop.textContent = 'The two values are equal';
                AnswerBottom.textContent = "";
                minMaxIdLoc.innerHTML = "";
            } else {
                AnswerTop.textContent = "Error in input";
                AnswerBottom.textContent = "";
                minMaxIdLoc.innerHTML = "";
            }
        }
    }
}