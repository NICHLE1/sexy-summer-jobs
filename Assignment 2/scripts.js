/*
    Separate JavaScript file, with the main purpose of providing functions for when the user clicks on the reset button on the navigation bar which is on all pages
    along with a function for checking whether the user has selected at least one checkbox on the Delete Athlete page. The commented out code is left for future reference.
*/

// confirmation to reset database message
function confirmDatabaseReset()
{
        // asks the user for input and stores in a variable
        var resetCheck = confirm("Are you sure you wish to reset the database? This will refresh all the database fields to their defaults and overwrite any changes you made (e.g. sailors you've added)");

        if(resetCheck == true)
        {
            window.location.href = "resetDatabase.php";
            // for some reason, this alert appears vital for the database to reset after some testing. Not sure why exactly.
            alert("");

            //var storeCurrentPage = window.location;
            //document.write("<a href='resetDatabase.php'>");

            //window.location.href = storeCurrentPage;
            //window.location.href = "resetDatabase.php";


            //return true;
            //<a href="resetDatabase.php">;
        }
        //else
        //{
            //return false;
        //}
}

// no athletes that have been selected for deletion message. I could get the messagebox to appear if the user didn't select any checkboxes, but struggled with making the page stay where it is
// without going to the Output page, as the submit button passes across its name value whenever clicked on, so in the controller it always considers that $_POST['deleteAthlete'] to be true, and
// therefore includes the Output file. I found a different way and have implemented this on the deleteAthlete.html.php page, and it now works as intended, but as I am using an external javascript
// web source in that file, it does not appear to communicate with this document. Therefore, I inserted the Javascript locally to that page and it works, but this is not what I wanted as I am not
// separating out the code layout for the different things (html, php, javascript etc) by doing that. E.g. the deleteAthleteController.php is entirely php.
function checkNoAthletesDeleted()
{
    // https://stackoverflow.com/questions/11787665/making-sure-at-least-one-checkbox-is-checked
    // https://stackoverflow.com/questions/9119407/how-do-i-check-if-any-checkboxes-at-all-on-the-page-are-checked

/*    var checkBoxes = document.getElementsByName("delete[]");
    var checkConfirmation = false;

    for(var i=0,l=checkBoxes.length;i<l;i++)
        {
            if (checkBoxes[i].checked)
            {
                checkConfirmation = true;
                break;
            }
        }

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


        exit();
        
        window.location.href = "deleteAthlete.html.php";
        return true;*/
}
