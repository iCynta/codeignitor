/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function App() {
}

$(document).ready(function() {
    
    var app = new App();
     app.init();
    
    $("#newOption").click(function()
            {
            $('#newOptionForm').submit();
            preventDefault();
            });
});