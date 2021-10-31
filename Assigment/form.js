$(document).ready(function () {
  $("form").submit(function (event) {

    $(".form-group row").removeClass("has-error");
    $(".help-block").remove();

    var formData = {
      name: $("#username").val(),
      email: $("#email").val(),
      password: $("#password").val(),
      confirmPassword: $("#confirmpassword").val(),
    };
    console.log(formData);
      $.ajax({
      type: "POST",
      url: "controller.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);

      if (!data.success) {

          if (data.errors.username) {
              $("#username-group").addClass("has-error");
              $("#username-group").append(
                '<div class="help-block">' + data.errors.username + "</div>"
              );
          }
  
          if (data.errors.email) {
              $("#email-group").addClass("has-error");
              $("#email-group").append(
                '<div class="help-block">' + data.errors.email + "</div>"
              );
          }
  
          if (data.errors.password) {
              $("#password-group").addClass("has-error");
              $("#password-group").append(
                '<div class="help-block">' + data.errors.password + "</div>"
              );
          } 

          if (data.errors.confirmPassword) {
              $("#confirmpassword-group").addClass("has-error");
              $("#confirmpassword-group").append(
                '<div class="help-block">' + data.errors.confirmPassword + "</div>"
              );
          }

        } else {
          $("form").html(
            '<div class="alert">' + data.message + "</div>" 
          );
        }
    }).fail(function (data) {
            $("form").html(
                '<div class="alert alert-danger">Could not reach server, please try again later.</div>'
            );
        });
        

    event.preventDefault();
  });
});