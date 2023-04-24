<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #page{
            width:189mm;
        }
        #page .head{
            display:flex;
            justify-content:center;
        }
        #page .head h1{
            text-align:center;
        }
        #page .detail{
            display:flex;
        }
        #page .detail .left,.right{
            display:flex;
        }
        #page .detail .left,.right p{
            font-size:1rem;
        }
    </style>
</head>
<body>


<p id="ignorePDF">don't print this to pdf</p>
<div class="page" id="page">
<div class="head"><h1>COURSE FILE</h1></div>
<hr>
<div class="detail">
    <div class="left">
        <p>NAME:</p>
        <p contenteditable="true">YOUR NAME</p>
    </div>
</div>
</div>
<div>
      <p id="p"><font size="3" color="red">print this to pdf</font></p>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    function generate(){
        var doc = new jsPDF("p", "mm", [189, 300]);          
var elementHandler = {
  '#ignorePDF': function (element, renderer) {
    return true;
  }
};
var source = window.document.getElementById("page");
doc.fromHTML(
    source,
    15,
    15,
    {
      'width': 90,'elementHandlers': elementHandler
    });

// doc.save('demo.pdf');
window.open(doc.output('bloburl'));
    }
    document.getElementById('p').addEventListener('click',generate);

</script>
</body>
</html>