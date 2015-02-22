/* Create TABLE notes */
CREATE TABLE `notes` (
    `id` int(11) unsigned NOT NULL,
    `title` varchar(255) DEFAULT NULL,
    `body` LONGTEXT DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Create TABLE tips */
CREATE TABLE `tips` (
    `id` int(11) unsigned NOT NULL,
    `body` LONGTEXT DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Create TABLE pics */
CREATE TABLE `pics` (
    `id` int(11) unsigned NOT NULL,
    `body` LONGTEXT DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

