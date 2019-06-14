 function getCPU()
 {
    var dialog = document.getElementById('cpu');
    var showDialogButton = document.querySelector('#show-Modal');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }
 function getMOBO()
 {
    var dialog = document.getElementById('mobo');
    var showDialogButton = document.querySelector('#show-MOBO');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }
function getGPU()
 {
    var dialog = document.getElementById('GPU');
    var showDialogButton = document.querySelector('#show-MOBO');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }
function getRAM()
 {
    var dialog = document.getElementById('RAM');
    var showDialogButton = document.querySelector('#show-MOBO');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }function getHDD()
 {
    var dialog = document.getElementById('HDD');
    var showDialogButton = document.querySelector('#show-MOBO');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }
function getCase()
 {
    var dialog = document.getElementById('Case');
    var showDialogButton = document.querySelector('#show-MOBO');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }
function getPSU()
 {
    var dialog = document.getElementById('PSU');
    var showDialogButton = document.querySelector('#show-MOBO');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }
  function register()
 {
    var dialog = document.getElementById('register');
    var showDialogButton = document.querySelector('#show-MOBO');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }
 function pc1()
 {
    var dialog = document.getElementById('50KP');
    var showDialogButton = document.querySelector('#show-MOBO');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
 }
function GetData()
{
   // var id = $(this).closest("tr").first(".nr").innerHTML;
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nm1").text();
    alert("Hello! I am an alert box!");
    //var x = document.getElementById("nm1").innerHTML;
   // document.getElementById("showModal").innerHTML = id; 
}
function demoFromHTML() {
    var doc = new jsPDF('p', 'pt');
var elem = document.getElementById("Table1");
var res = doc.autoTableHtmlToJson(elem);
doc.autoTable(res.columns, res.data);
doc.save("table.pdf");
}
