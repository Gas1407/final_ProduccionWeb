-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2022 a las 01:16:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado`
--

CREATE TABLE `voluntariado` (
  `id` smallint(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` decimal(10,0) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `voluntariado`
--

INSERT INTO `voluntariado` (`id`, `nombre`, `telefono`, `email`, `comentario`) VALUES
(1, '', '0', '', ''),
(2, 'Gaston', '1133584035', 'gsampataro@gmail.com', 'hola como estas, es de prueba ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` tinyint(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Dia del niño', 'Me quede compartiendo los juegos con los nenes en el dia del niño, la pase muy bien! ', 'foto1.jpg'),
(2, 'Taller de pintura', 'Hoy comparti un taller de maquillaje y nos pintamos todos, fue muy divertido!', 'foto2.jpg'),
(3, 'Mural', 'Mi foto es de hace tiempo cuando dibuje el mural!', 'foto3.jpg'),
(4, 'Mural del parque', 'me acuerdo cuando pintamos el mural del parque, que nos llevo mucho tiempo!', 'foto4.jpg'),
(5, 'Dia de pintura', 'Pintando y compartiendo con amigos!', 'foto5.jpg'),
(6, 'Un abrazo nos transforma!', 'Esta es mi foto con Ariel, un nene que conocí en uno de los festejos, es un genio!', 'foto6.jpg'),
(7, 'Dia de huerta', 'Trabajando en equipo para armar una huerta comunitaria!', 'foto7.jpg'),
(8, 'Compartiendo un sabado', 'El ultimo sabado que fui, me puse a jugar y pintar con alexis y martin. La pase genial, hace cuanto no pintaba! ', 'foto8.jpg'),
(9, 'En comunidad', 'Este sabado compartimos un almuerzo con la gente que se acerca.\r\n', 'foto9.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `voluntariado`
--
ALTER TABLE `voluntariado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `voluntariado`
--
ALTER TABLE `voluntariado`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
