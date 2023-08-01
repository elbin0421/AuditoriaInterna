
function sumar()
{
  const $total = document.getElementById('total');
  let subtotal = 0;
  [ ...document.getElementsByClassName( "form-control" ) ].forEach( function ( element ) {
    if(element.value !== '') {
      subtotal += parseFloat(element.value);
    }
  });
  $total.value = subtotal;
}