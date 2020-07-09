$(function(){

    getVoteCount();

    function getVoteCount(){
        var loc = window.location.pathname;
        var dir = loc.substring(0, loc.lastIndexOf('/'));
        var log_dir = dir + '/log/';
        //get letsVote class for each
        $( ".letsVote" ).each(function( index ) {
            //get the letsVote class' data-numhtml
            var numhtml = $( this ).data("numhtml");
            var file = log_dir + 'buttonID' + (index+1) +'.text';
            //access to file that the the name corresponding numhtml
            jQuery.get(file, function(data) {
                //show file content(number of votes) as text in this span
                $("span." + numhtml).text(data);
            });
        });
    }
    
});