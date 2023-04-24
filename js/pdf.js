function viewpdf(){
    const doc = new jsPDF();
// set midPage for variable use
// var midPage = doc.internal.pageSize.getWidth()/2;

// Default is 210 mm so default midway by value is 105
doc.setFontSize(40);
doc.text("Department OF Computer\nScience and Engineering", 105, 20, null, null, "center");


// Better to use a variable "midPage" (from above)
doc.setFontSize(20);
doc.text("Course File", 105 , 50, null, null, "center");
doc.text("Understanding the Human Being Comprehensively –\n Human Aspirations and its Fulfillment",105,65,null,null,"center");
doc.setFontSize(15);
doc.text("NAME:      "+document.forms['form']['name'].value, 30 , 85, null, null);
window.open(doc.output('bloburl'));
}