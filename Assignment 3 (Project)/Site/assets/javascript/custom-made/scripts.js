/* function checkDeleteStudents()
{
     $(document).ready(function () {
                $('#checkSubmit').click(function() {
                    checked = $("input[type=checkbox]:checked").length;
                    if(!checked) 
                    {
                        alert("You need to check at least one checkbox to continue.");
                        return false;
                    }
                });
            });
} */

/*function getGridXYCoordinates()
{
    var x = document.getElementsByTagName("area")[0].getAttribute("alt"); 
    document.getElementById("demo").innerHTML = x;
}*/

function getGridXYCoordinates()
{
    document.addEventListener('click', function(e) {

        let xValue = 0;
        let yValue = 0;

        // need a more reliable way to check for only elements within the image (the boxes). 
        // Perhaps set up an object array containing a list of numbers and foreach my way through it.
        if(e.target.getAttribute("xValue") != null && e.target.getAttribute("yValue") != null && e.target.getAttribute("xValue") != "" && e.target.getAttribute("yValue") != "")
        {
            xValue = e.target.getAttribute("xValue");
            yValue = e.target.getAttribute("yValue");

            //alert("X value: " + xValue + "\nY value: " + yValue);

             document.getElementById('xValueInput').value = xValue;
             document.getElementById('yValueInput').value = yValue;

             document.getElementById('submitQuestion').disabled = false;
        }

    });

   
}


//function changeColour()
//{
  //  document.getElementById("test").style.backgroundColor = "#DB7093";
//}


      // $('#test').bind('click',function() {
           // $('area[group]').mapster('deselect');
        //});

//////////////////////////////////////////////    
    
    $(document).ready(function() {

        function state_change(data) {
            //alert(data.state+":"+data.selected);
        }
            $('img').mapster({
                //staticState: false
                minSelected: 1, // implemented to stop user from selecting an area and then clicking on it again, which would remove it
                onStateChange: state_change,
                fillColor: '0a7a0a',
                fillOpacity: 0.7,
                mapKey: "group",
                noHrefIsMask: false,
                render_select: {
                    fillColor: 'cc3300',
                    fillOpacity: 0.5
                },
                areas: [
                    {
                        //staticState: false,
                        key: 'outer-circle',
                        includeKeys: 'outer-circle-perimeter,inner-circle-perimeter'
                    },
                    {
                        //staticState: false,
                        key: 'inner-circle',
                        stroke: true,
                        strokeColor: 'adadad',
                        strokeWidth: 3,
                        fill: true

                    },
                    {
                        //staticState: false,
                        key: 'inner-circle-perimeter',
                        stroke: true,
                        strokeWidth: 3,
                        fill: false
                    }
                ]
            });
});