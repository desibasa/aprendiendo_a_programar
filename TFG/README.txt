NOTAS PARA EL PROYECTO:

IDEAS:
Realizacion de una pagina web de venta de entradas para un evento de comics americanos con 
simulacion de carrito de compra y llamada a una api para poder ver a todos los personajes

DISEÑO:
lo primero es buscar ideas, paleta de colores, tipografias etc. Para ello busco referencias en 
pinterest y en otras webs de eventos similiares. Lo que mas suele utilizarse son fondos oscuros
sobre todo negros o azules muy oscuros con colores muy llamativos, predominando entre ellos el 
amarillo, los contenedores suelen estar separados por franjas blancas simulando hojas de comic
y los contenedores resaltantes suelen tener un borde bastante ancho de color negro. 

Suele haber dos grandes variantes, los colores mas retro que suelen tender hacia los tonos pastel
y los mas actuales que son colores extremadamente saturados los cuales en mi caso voy a elegir
para que llamen mas la atencion

COLORES:
Amarillo chillon: #FFB915
Amarillo suave: #FFD358
Negro: #232323
Blanco: #FFFFFF
Azul mas claro: #003F66
Azul intermedio: #002A45
Azul mas oscuro: #011B2F

Las tipografias mas predominantes suelen ser de bastante peso y alargadas, la letra de comic en si
solo se usa para algun que otro toque muy puntual. La accesibilidad no da problemas con estas 
combinaciones, lo que hace que la UX (user experience) sea posible para todo tipo de personas 
oincluso las que tienen algun tipo de discapacidad visual.

Las imagenes y los videos buscandos tendran que ser libres de derechos de autor, para ello he usado
Freepick y Envato.



2)RESPONSIVE

El responsive es uno de los apartados mas importantes en la web ya que la mayoria son visitadas por 
dispositivos moviles, por eso comenzare a maquetar la web por este punto

Móvil	0 - 767px
Tablet	768px - 1023px
Desktop portatíl	1024px+
Desktop grande	1440px+



PUNTO 1 EL NAV:
El nav es un componente reutilizable para toda la web, por eso el uso de javascript para esto,
usare el fetch ya que busca el archivo y lo comparte en todas las paginas. 

El fetch es una funcion que devuelve una promesa, es decir, es como cuando pedimos algo a un 
camarero y te dice vale lo tengo apuntado, dame un momento para que te lo traiga. Lo que te 
trae el camarero se almacena en el .then y es la palabra que nosotros queramos, en este caso 
es response porque es una palabra muy utilizada y significa respuesta pero podemos poner la 
que queramos.

El .then es un metodo encadenado, esto quiere decir que si se ha cumplido el primer metodo pasara al 
siguiente, y luego al siguiente y asi sucesivamente,es decir, hace varias acciones en secuencia.
El .then como ya he dicho almacena los datos que hemos traido con el fetch y tiene varios metodos,
en este caso el metodo que queremos utilizar es que pase la informacion a texto para que se pueda
manipular, es muy util en texto plano pero tambien podemos usar metodos como json() para datos
de json en APIs, .blob() para descargar imagenes, videos o archivos o incluso uno de los mas 
importantes que es .formData() Para recibir datos de los formularios.

innerHTML es una propiedad de JavaScript que permite cambiar el elemento que hayamos seleccionado
por otra cosa. En este caso seleccionamos el contenedor con el id "navegador" y le decimos que 
cambie el contenido añadiendo los elementos que estan alamacenados en data que vienen de nav.html

curiosidad: la gran mayoria de navegadores utiliza C++ para renderizar el contenido de Javascript 
para mostrarlo por el navegador

