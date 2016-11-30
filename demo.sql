- Post Table

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(124) NOT NULL,
  `post_body` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO post VALUES('1','What is jQuery?','jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of versatility and extensibility, jQuery has changed the way that millions of people write JavaScript.');

-- Comment Table

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(8) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);