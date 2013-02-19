var strings = {
 com:
  {
   "register": 'Welcome to my website',
   "reg":'Cannot complete registration\n There are required fields that remain empty,\n Please find these marked with a red border',
   "missing-mess":	'Missing Field. Please enter',
   "f-name":	'First name.',
   "surname":	'Surname.',
   "c-name":	'Company name.',
   "position":	'Position.',
   "email":	'Email.',
   "email-mess":  'Please enter valid email address.',
   "telephone":	'Telephone number.',
   "mobile":	'Mobile number.',
   "type":	'a type.'
  },
 es:
  {
   "register": 'Bienvenidos a mi sitio web',
   "reg":	'No se puede completar el registro \ n Hay campos obligatorios que permanecen vacías, \ n Por favor, encontrar estos marcada con un borde rojo',
   "missing-mess":	'Falta el campo. Por favor, introduzca',
   "f-name":	'primer nombre',
   "surname":	'apellido.',
   "c-name":	'nombre de compania.',
   "position":	'posici&oacute;n.',
   "email":	'Email.',
   "email-mess":  'Por favor, introduzca la direcci&oacute;n de correo electr&oacute;nico valida.',
   "telephone":	'n&uacute;mero Telefono.',
   "mobile":	'm&oacute;vil n&uacute;mero.',
   "type":	'un tipo.'
  }
};

function getString( key )
{
    var langsplit = document.domain.split(".");
    var lang = langsplit[langsplit.length-1];

    if( typeof( strings[lang] ) == 'undefined' )
    {
        return null;
    }
    else
    {
        return strings[lang][key];
    }
}
