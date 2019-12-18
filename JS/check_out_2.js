$(document).ready(function(){

//For Card Number formatted input
var cardNum = document.getElementById('cr_no');
cardNum.onkeyup = function (e) {
if (this.value == this.lastValue) return;
var caretPosition = this.selectionStart;
var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
var parts = [];

for (var i = 0, len = sanitizedValue.length; i < len; i +=4) { parts.push(sanitizedValue.substring(i, i + 4)); } for (var i=caretPosition - 1; i>= 0; i--) {
    var c = this.value[i];
    if (c < '0' || c> '9') {
        caretPosition--;
        }
        }
        caretPosition += Math.floor(caretPosition / 4);

        this.value = this.lastValue = parts.join('-');
        this.selectionStart = this.selectionEnd = caretPosition;
        }

        //For Date formatted input
        var expDate = document.getElementById('exp');
        expDate.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i +=2) { parts.push(sanitizedValue.substring(i, i + 2)); } for (var i=caretPosition - 1; i>= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c> '9') {
                caretPosition--;
                }
                }
                caretPosition += Math.floor(caretPosition / 2);

                this.value = this.lastValue = parts.join('/');
                this.selectionStart = this.selectionEnd = caretPosition;
                }

                // Radio button
                $('.radio-group .radio').click(function(){
                $(this).parent().parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                });
                })

// https://www.mediaevent.de/pdf-on-the-fly-mit-javascript-erzeugen-jspdf/


function printPDF() {

    const pdf = new jsPDF();
    let name2 = document.getElementById('name2');
    let adress2 = document.getElementById('adress2');
    let city2 = document.getElementById('city2');
    let zipcode2 = document.getElementById('zipcode2');
    let country2 = document.getElementById('country2');

    pdf.text(20, 20, "CUSTOMER DATA");
    pdf.text(20, 40, "Customer Name: " + name2.value);
    pdf.text(20, 50, "Adress: " + adress2.value);
    pdf.text(20, 60, "City: " + city2.value);
    pdf.text(20, 70, "ZipCode: " + zipcode2.value);
    pdf.text(20, 80, "Country: " + country2.value);
    pdf.save("New_Customer_" + name2.value);

    location.href="checkout_complete.php"
}