$(function () {
  //define variables
  var activeNote = 0;
  var editMode = false;

  //   console.log("Rock on baby");

  //load notes on page load: Ajax call to loadnotes.php
  $.ajax({
    url: "loadnotes.php",
    success: function (data) {
      $("#notes").html(data);
      //with have to insert the functions here so that they are applied,
      //otherwise they run faster than the ajax call
      //and are innefficient has the ajax call hasn't yet load the targeted element.
      clickonNote();
      clickonDelete();
    },
    error: function () {
      $("#alertContent").text(
        "There was an error loading your notes. Please try again later."
      );
      $("#alert").fadeIn();
    },
  });

  //add a new note: : Ajax call to createnote.php
  $("#addNote").click(function () {
    $.ajax({
      url: "createnote.php",
      success: function (data) {
        if (data == "error") {
          $("#alertContent").text(
            "There was an issue inserting the new note in the database!"
          );
          $("#alert").fadeIn();
        } else {
          //update activeNote to the id of the new note
          activeNote = data;
          $("textarea").val("");
          //show hide elements
          showHide(
            ["#notePad", "#allNotes"],
            ["#notes", "#addNote", "#editNote", "#doneNote"]
          );
          $("textarea").focus();
        }
      },
      error: function () {
        $("#alertContent").text(
          "There was an error with the Ajax Call. Please try again later."
        );
        $("#alert").fadeIn();
      },
    });
  });
  //type note: : Ajax call to updatenote.php
  //keyup is when you type on the keyboard

  $("textarea").keyup(function () {
    //ajax call to update the task of id activenote
    $.ajax({
      url: "updatenote.php",
      type: "POST",
      //we need to send the current note content with its id to the php file
      //This 'data' is a parameter of the ajax call, it's different
      //than the 'data' argument of the following function.

      data: { note: $(this).val(), id: activeNote },
      success: function (data) {
        if (data == "error") {
          $("#alertContent").text("There was an issue updating the note.");
          $("#alert").fadeIn();
        }
      },
      error: function () {
        $("#alertContent").text("Connection error.");
        $("#alert").fadeIn(); //animation for the alert box
      },
    });
  });

  //click on all notes button
  $("#allNotes").click(function () {
    $.ajax({
      url: "loadnotes.php",
      success: function (data) {
        $("#notes").html(data);
        showHide(
          ["#addNote", "#editNote", "#notes"],
          ["#allNotes", "#notePad"]
        );
        clickonNote();
        clickonDelete();
      },
      error: function () {
        $("#alertContent").text(
          "There was an error with the Ajax Call. Please try again later."
        );
        $("#alert").fadeIn();
      },
    });
  });

  //click on done after editing: load notes again
  $("#back").click(function () {
    //siwtch to non edit mode
    editMode = false;
    //expand notes
    $(".noteheader").removeClass("col-xs-11 col-sm-10");
    //show hide elements
    showHide(["#editNote", "#addNote"], [this, ".delete"]);
  });

  //click on edit: go to edit mode (show delete buttons, ...)
  $("#editNote").click(function () {
    //switch to edit mode
    editMode = true;
    //reduce the width of notes
    $(".noteheader").addClass("col-xs-11 col-sm-10");
    //show hide elements
    showHide(["#back", ".delete"], [this, "#addNote"]);
  });

  //functions
  //click on a note
  function clickonNote() {
    $(".noteheader").click(function () {
      if (!editMode) {
        //update activeNote variable to id of note
        activeNote = $(this).attr("id");

        //fill text area
        $("textarea").val($(this).find(".text").text());

        //show hide elements
        showHide(
          ["#notePad", "#allNotes"],
          ["#notes", "#addNote", "#editNote", "#done"]
        );
        $("textarea").focus();
      }
    });
  }
  //click on delete

  function clickonDelete() {
    $(".delete").click(function () {
      var deleteButton = $(this);
      //send ajax call to delete note
      $.ajax({
        url: "deletenote.php",
        type: "POST",
        //we need to send the id of the note to be deleted
        //we use 'next' bcse the div that contains the note is right after our button.
        data: { id: deleteButton.next().attr("id") },
        success: function (data) {
          if (data == "error") {
            $("#alertContent").text("There was an issue deleting the note.");
            $("#alert").fadeIn();
          } else {
            //remove containing div
            deleteButton.parent().remove();
          }
        },
        error: function () {
          $("#alertContent").text("Connection error.");
          $("#alert").fadeIn();
        },
      });
    });
  }
  //show Hide function

  function showHide(array1, array2) {
    for (i = 0; i < array1.length; i++) {
      $(array1[i]).show();
    }
    for (i = 0; i < array2.length; i++) {
      $(array2[i]).hide();
    }
  }
});
