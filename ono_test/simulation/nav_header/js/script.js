$(function () {
    $('.clear').click(function () {
      $(this).parent().find('input').val('');
      $(this).parent().find('input').focus();
    });
  });