# liked_statistics
This is a system file that handles summation of likes in the page

## Things to know
Functions are created to that works for html file(sample.html) and php(index.html).
The difference between those files is the way of loarding number initially when calling file(either html or php). 
index.php includes function.php to get number of likes initially, while sample.html includes function.js to do so.

## What each files does
*index.php/sample.html: main file that user will click the like button
*function.php/function.js: files that stores the fuction getVotes(), which get the number of votes from log files for each buttuons and display it in the main file when loarded.
*clickCount.js: file that will run when button is clicked. When button is clicked this file will send a post request to the backend(vote.php) to rewrite the vote number in the log file, but cookie is varid(user has voted before) it will show alert.
*vote.php: file that will rewrite the log files and store/check the cookie expiration time.
