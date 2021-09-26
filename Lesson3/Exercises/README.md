## Before Exercises:

Today we work with PHP, remember to install PHP version 8.0!

## Exercise: Familiarize with PHP

Solve the first exercise of the previous class: [Looping a triangle](https://eloquentjavascript.net/02_program_structure.html#i_umoXp9u0e7).
This time, using PHP.


## Exercise: PHP and OOP

We are going to use another JavaScript problem and solving it with PHP: [creating the Vector class](https://eloquentjavascript.net/06_object.html#i_zO8FRQBMAy).


## Exercise: PHP and HTML

Going back to our original HTML form to upload albums, we are going to use PHP to create a dynamic version of the form.
In this version, you need to embed PHP code that renders dynamically the list of artists to be selected:


    <body>
      <?php $artists = ... ?>
      <select>
        <?php // code to loop through the artists variable, printing an option for each artist?>
      </select>
    </body>


## Exercise: PHP and form data

Now your job is to receive the data from the previous form in another dynamic web page and show the received data.
Here, you have to do a web page with the information of the received album:
Title, artist, year, description and amount of tracks.

Pro tip: to send an array of data to the server (all tracks), the name of the input should end with square brackets: *ex* ```track[]```


## Extra exercise: Validation

We have a validation strategy for the inputs of the form in JavaScript, but it is not enough (*Why?*).
In this exercise, your goal is to modify the page that receives the data and validate the inputs from the form.
If the inputs are not valid, this page should display a simple message stating that the data is not valid.

## Extra exercise: Validation and messages

A simple error message is not enough for the user of our web page to know what it is the real problem with the data.
We have a similar validation in JavaScript that states which inputs are invalid, now you need to do the same but with PHP.
In this exercise, instead of posting the data to a new page, you are going to post it to the same form, then:

* If there is no ```$_POST``` data, it should display the normal form.
* If there is ```$_POST``` data, it should verify the data and:
  * If the data is valid, show an extra success message.
  * If the data is not valid, mark the correspondent field in the form with the error.
