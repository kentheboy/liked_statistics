$(function(){

         $('.letsVote').on('click' , function(){
              
              $this = $(this);
              var id = $this.data("id"); //button ID (no button has the same ID)
              var numHtml = "." + $this.data("numhtml"); //HTML selector where displays the number of votes
              var nowCount = Number($(numHtml).html()); //current votes
              var newCount = nowCount + 1;
    
              $.ajax({
                   type : "POST",
                   url : "vote.php",
                   data: {
                        "file_id" : id,
                        "count" : newCount
                   }
              }).done(function(data , datatype){
                       
                        if(data == "Complete"){ //if post request returns "Complete" (from vote.php)
                             $(numHtml).html(newCount);
                        }else{//if not "complete" (which meanse cookie haven't expired)
                             alert("二重投票はできません。");
                        }
                   }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
                          $("#XMLHttpRequest").html("XMLHttpRequest : " + XMLHttpRequest.status);
                          $("#textStatus").html("textStatus : " + textStatus);
                          $("#errorThrown").html("errorThrown : " + errorThrown.message);
                      });
    　　　　});
    });