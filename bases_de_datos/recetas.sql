-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 19:22:14
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `ID_RECETA` int(100) UNSIGNED NOT NULL,
  `NOMBRE_RECETA` char(255) COLLATE utf8_spanish_ci NOT NULL,
  `DIFICULTAD` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `INGREDIENTES` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `PROCEDIMIENTO` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`ID_RECETA`, `NOMBRE_RECETA`, `DIFICULTAD`, `DESCRIPCION`, `INGREDIENTES`, `PROCEDIMIENTO`) VALUES
(1, 'Omelette de jamón y queso', 'Difícil', 'El omelette es un plato elaborado con huevos batidos, fritos con aceite en una sartén, y rellenos con ingredientes a elección. En esta receta, tales ingredientes son jamón y queso.', 'Una unidad\r\n\r\n- Dos huevos\r\n- Leche\r\n- Aceite de girasol\r\n- Jamón\r\n- Mozzarella', '- Abrir los dos huevos y volcar su contenido en un bol. Luego, añadir media taza de leche. Acto seguido, batir hasta que los ingredientes se hayan mezclado enteramente.\r\n\r\n- Pasarle un pequeño chorro de aceite a una sartén, y luego esparcirlo.\r\n\r\n- Cortar pequeñas tiras de jamón y mozzarella. Al hacerlo, calcule cuantas tiras entrarían en la mitad del tamaño de la sartén y corte apropiadamente. \r\n\r\n- Prender una hornalla a fuego medio, y poner la sartén encima de ella. Inmediatamente verter el contenido del bol en la sartén. Asegurarse de que el líquido ocupe toda la sartén para aprovechar al máximo la capacidad de la misma.\r\n\r\n- Cuando el contenido empiece a endurecerse pero no esté del todo cocido, acomode con cuidado y prolijidad las tiras de jamón y mozzarella en una mitad del omelette, dejando la otra despejada.\r\n\r\n- Una vez el omelette se haya cocinado enteramente, apague la hornalla y empiece a despegarlo de la sartén con una espátula.\r\n\r\n- Cuidadosamente, levante la mitad despejada y dela vuelta para tapar a la mitad con el jamón y mozzarella.\r\n\r\n- Levántela de la sartén, colóquela en un plato y disfrute la comida.'),
(2, 'Empanadas de carne picada', 'Normal', 'La empanada es una fina masa de pan, masa quebrada u hojaldre rellena con una preparación salada o dulce y cocida al horno o frita. El relleno puede incluir carnes rojas o blancas, pescado, verduras o fruta, aunque esta receta se centrará en el relleno de carne picada.', 'Doce unidades\r\n\r\n- Medio kilo de carne picada\r\n- Tapas de empanada de hojaldre (paquete de 12 unidades)\r\n- Medio morrón\r\n- Un huevo\r\n- Aceite de girasol\r\n', '- Cortar el morrón en hebras y luego en trozos pequeños.\r\n\r\n- Poner a hervir el huevo. Una vez se haya cocido el huevo duro, cortarlo en pedacitos pequeños, igual que al morrón.\r\n\r\n- Pasarle aceite a una olla, esparcirlo bien, poner la olla sobre una hornalla a fuego medio, y luego verter ahí el medio kilo de carne picada.\r\n\r\n- Cuando la carne se haya cocido, apagar la hornalla y verter los trocitos de morrón y huevo en la olla. Batir con una cuchara hasta que los tres ingredientes se hayan mezclado bien.\r\n\r\n- Acto seguido, empezar a verter la mezcla en las tapas de hojaldre; usualmente, una empanada está bien de contenido con dos cucharas de relleno.\r\n\r\n- Cuando se haya vertido el relleno en la tapa, se empieza el proceso de repulgar la tapa; la mejor manera de lograrlo exitosamente es viendo a alguien más hacerlo y luego imitar el procedimiento, puesto que no hay una manera en particular de hacerlo.\r\n\r\n- Cuando todas las tapas hayan sido rellenas y repulgadas, pinchar a cada una con suavidad utilizando un tenedor, abriéndoles pequeños agujeros. Esto es con el fin de que no se inflen y se rompan cuando estén en el horno.\r\n\r\n- Meterlas al horno en una bandeja, y ponerlas a quince minutos aproximadamente, así la masa de las tapas se cocina y se endurece.\r\n\r\n- Pasados los quince minutos, retirarlas del horno, servirlas en un plato y a disfrutar la comida.'),
(3, 'Pizza', 'Normal', 'La pizza es un pan plano horneado, habitualmente de forma redonda, elaborado con harina de trigo, sal, agua y levadura, cubierto con salsa de tomate y queso.', 'Pizza de ocho porciones\r\n\r\n- Harina\r\n- Agua\r\n- Salsa de tomate\r\n- Queso Mozzarella', '- Se hace una masa de pan utilizando la harina y el agua, usando cantidades proporcionales de ambos para hacer una masa de un tamaño grande.\r\n\r\n- Amasar la masa de pan hasta que quede plana. Luego, ubicarla en una bandeja grande.\r\n\r\n- Cortar el queso mozzarella en trozos finos pero grandes.\r\n\r\n- Verter y luego esparcir la salsa de tomate para que cubra una gran parte de la masa de pan. Acto seguido, ubicar equitativamente los trozos de mozzarella sobre la masa, ocupando una parte generosa de la misma, aunque sin cubrir el borde de la masa.\r\n\r\n- Con cuidado, poner la masa en el horno y dejarla cocinándose por aproximadamente media hora.\r\n\r\n- Luego, retirarla del horno y cortarla en porciones de forma triangular. Usualmente, se corta de manera que queden ocho porciones.\r\n\r\n- Servir las porciones y disfrutar de la comida.'),
(4, 'Ñoquis', 'Fácil', 'Los ñoquis son un tipo de pasta italiana.', 'Unidades dependen del tamaño\r\n\r\n- Dos papas\r\n- Dos tazas de harina\r\n- Un huevo', '- Pelar las papas.\r\n\r\n- Poner a hervir agua en una cacerola a fuego medio, y verter las papas peladas ahí.\r\n\r\n- Una vez las papas estén bien blandas, apagar la hornalla, sacar las papas y pisarlas en un bol con un tenedor o utensilio similar.\r\n\r\n- Partir el huevo y verter su contenido en el bol. También, verter las tazas de harina y proceder a mezclar y amasar hasta que se forme una masa.\r\n\r\n- Separar la masa en pedazos y amasarlos hasta que queden alargados y delgados. Luego, proceda a cortar las \"líneas\" de masa en pedazos pequeños.\r\n\r\n- Poner a hervir agua una cacerola a fuego medio nuevamente, y verter los trocitos en ella. Dejar por cinco minutos y luego apagar la hornalla.\r\n\r\n- Usar un colador para drenar el agua y servir los ñoquis en platos.'),
(5, 'Ensalada César', 'Fácil', 'El inventor de esta ensalada fue el chef del restaurante Cardini, Remigio Murgia, aunque el platillo se nombró ensalada César en honor al dueño y también cocinero César Cardini. Esta ensalada es muy popular y ha llegado a internacionalizarse, siendo posible encontrarla en variados restaurantes del mundo.\r\n\r\n', 'Cantidad depende de los ingredientes usados\r\n\r\n- Lechuga\r\n- Aceite de oliva\r\n- Dos dientes de ajo\r\n- Pimienta negra\r\n- Jugo de limón\r\n- Queso parmesano\r\n- Un huevo\r\n- Dos anchoas', '- Cortar las hojas de lechuga. Vale mencionar que la cantidad de hojas usadas varía acorde a la necesidad del cocinero. Verter las hojas cortadas en un bol.\r\n\r\n- Cortar las anchoas y pisar los dientes de ajo, y luego verterlos en el bol con la lechuga.\r\n\r\n- Verter dos cucharas de jugo de limón en el bol, y luego rallar el queso parmesano a gusto.\r\n\r\n- Para terminar, abrir el huevo y verter su contenido en el bol, y luego esparcir un chorro apropiado de aceite de oliva.\r\n\r\n- Poner en la heladera por una hora.\r\n\r\n- Sacarla de la heladera, y ahí estará listo para servir.\r\n'),
(6, 'Puré de papa', 'Fácil', 'El puré es una técnica culinaria que consiste en machacar o triturar un alimento cocido, de tal forma que muestre una textura homogénea de pasta. En este caso, el alimento es cuestión es la papa.', 'Cantidad depende del ingrediente usado\r\n\r\n- Papas (la cantidad de papas depende de la cantidad de personas)\r\n- Leche', '- Pelar las papas.\r\n\r\n- Poner a hervir agua en una olla a medio fuego, y luego verter las papas peladas en ella.\r\n\r\n- Una vez las papas se encuentren blandas, apagar la hornalla y retirarlas de la olla. Ponerlas en un bol, y machacarlas con un tenedor o utensilio similar.\r\n\r\n- La cremosidad del puré depende de tres factores: cuán machacadas estén, y si se le agrega leche y agua. En el caso de los últimos, agregar moderadamente, puesto que es posible que el puré quede muy aguado si se le pone en exceso.\r\n\r\n- Una vez se termine de machacar, servir en un plato y disfrutar de la comida.'),
(7, 'Tortilla de papa', 'Difícil', 'Es una tortilla​ con papas aunque también se le puede añadir más ingredientes como cebolla. Se trata de uno de los platos más conocidos y emblemáticos de la cocina española, siendo un producto muy popular que se puede encontrar en casi cualquier bar o restaurante de España.', 'Para tres o cuatro personas\r\n\r\n- Dos papas\r\n- Una cebolla\r\n- Dos huevos\r\n- Aceite de girasol\r\n- Chorizo colorado (opcional)', '- Pelar las papas y luego cortarlas en rodajas finas. Hacer lo mismo con la cebolla.\r\n\r\n- Abrir los huevos y verter sus contenidos en un bol, y luego batir.\r\n\r\n- OPCIONAL: cortar cuatro o cinco rodajas de chorizo colorado.\r\n\r\n- Colocar una cantidad generosa de aceite en una olla, de manera que las papas se puedan pochar. Una vez las papas están en la olla, esperar hasta que se ablanden. Revolver de vez en cuando, para evitar que se peguen a la olla.\r\n\r\n- Cuando las papas estén blandas, agregar la cebolla. En el caso de que haya chorizo, verterlo en la olla junto a la cebolla.\r\n\r\n- Una vez las papas estén doradas y algunas se empiecen a endurecer, sacar del fuego. Prender una hornalla con una sartén encima y verter el contenido de huevo allí.\r\n\r\n- Verter las papas y cebollas en la sartén, y esperar por cinco minutos aproximadamente.\r\n\r\n- Pasado ese tiempo, apagar la hornalla, dar vuelta la tortilla cuidadosamente sobre un plato grande o bandeja, y servir.'),
(8, 'Chocotorta', 'Normal', 'Acá la versión original de cómo se hace la chocotorta, con los ingredientes que usó su creadora, la jefa creativa publicitaria Maite Madragaña. Este postre debe su éxito a que no requiere horneado, ni batidora y no exige ningún conocimiento de pastelería.', '- Dulce de leche\r\n- Queso crema\r\n- Galletas de chocolate\r\n- Café', '- En un bol mezclar el dulce de leche y el queso blanco hasta lograr una mezcla homogénea.\r\n\r\n- Preparar el café y verterlo en una fuente o plato hondo.\r\n\r\n- Cuidadosamente remojar las galletas en el café y posicionarlas en un molde o bandeja.\r\n\r\n- Cubrir las galletas con una capa de la mezcla de dulce de leche y queso crema. Una vez se termine de cubrir, posicionar las galletas restantes encima de la mezcla, creando otra capa. Repetir hasta que se acaben las galletas.\r\n\r\n- Llevar a la heladera por unas cuatro horas, y luego cortar y servir.'),
(9, 'Rabas a la provenzal', 'Difícil', 'Son un producto frito preparado a base de calamares fritos rebozados o pulpo rebozado o en harina que se puede encontrar en muchos bares y restaurantes de los países que disfrutan de la cocina mediterránea y atlántica.', '4 raciones\r\n\r\n- Un kilo de tubos de calamar congelados\r\n- Aceite\r\n- Un kilo de harina\r\n- Tres huevos\r\n- Provenzal\r\n- Un limón', '- En los tubos se retira con mucho cuidado una capa de piel que recubre al calamar con un cuchillo o utensilio similar.\r\n\r\n- Los tubos se cortan de forma horizontal a su base, dándoles un ancho de tres centímetros o menos.\r\n\r\n- En una olla echar tres huevos y batir con tenedor por cinco minutos hasta quedar la yema revuelta, y agregar dos cucharadas de sal y provenzal.\r\n\r\n- En una fuente o una echar medio kilo de harina, sal, y un poco del provenzal, y mezclar bien. Sacar una por una las rabas y pasarlas donde esta la harina mezclada.\r\n\r\n- Echar aceite y poner a calentar. Hervir el aceite, echar las rabas y poner fuego a mínimo así no se queman.\r\n\r\n- Retirar las rabas del aceite con un un tenedor depositándolas en una fuente con papel de cocina absorbente, y disfrutar.\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`ID_RECETA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `ID_RECETA` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
