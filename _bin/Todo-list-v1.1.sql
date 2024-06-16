
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `comment`) VALUES
(1, 'admin', 'CRUD'),
(2, 'editor', 'CRU'),
(3, 'user', 'CR');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `name`, `comment`) VALUES
(1, 'started', 'task has started'),
(2, 'on going', 'task is in progress'),
(3, 'pending', 'task  has stopped'),
(4, 'cancelled', 'task  has stopped'),
(5, 'completed', 'task is in progress');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `started_time` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `id_task_giver` int NOT NULL,
  `id_assigned_to` int NOT NULL,
  `id_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `started_time`, `due_date`, `id_task_giver`, `id_assigned_to`, `id_status`) VALUES
(1, 'projet crud ', 'finir le projet crud tasks', '2024-06-12 00:00:00', '2024-07-09 00:00:00', 1, 3, 1),
(2, 'projet react ', 'construire un projet en react', '2024-06-11 00:00:00', '2024-09-09 00:00:00', 1, 2, 1),
(3, ' échequier de sissa', "résoudre l\'algo de sisa", '2024-05-21 00:00:00', '2024-06-06 00:00:00', 1, 4, 5),
(4, 'Crud ville', 'finir le crud de bouteina', '2024-06-09 00:00:00', '2024-06-13 00:00:00', 1, 3, 4),
(5, 'MCD bdd classicmodels', 'finir le MCD bdd classicmodels', '2024-06-03 00:00:00', '2024-07-12 00:00:00', 1, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `id_role` int NOT NULL DEFAULT '0',
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `password`, `first_name`, `last_name`, `active`, `id_role`, `username`) VALUES
(1, '123', 'John ', 'Smith', 1, 1, NULL),
(2, '123', 'Apple', 'citron', 1, 1, NULL),
(3, '123', 'Lhassan ', 'Alhmoum', 1, 1, NULL),
(4, '123', 'Bleza ', 'Plegnon', 1, 1, NULL),
(5, '123', 'Leni ', 'Bbop', 1, 1, NULL),
(6, '123', 'Alfred ', 'Le Compte', 1, 1, NULL),
(7, '123', 'Julie ', 'Maman', 1, 1, NULL),
(8, '123', 'Ramzi ', 'zidane', 1, 1, NULL),
(9, '$2y$10$hrrEZOwHkH9ffN2hslg..OB0UJnNzG6OXv/EbJ1bfFjtSbbEpXvQ6', NULL, NULL, 1, 0, 'leni'),
(10, '$2y$10$mniBIcOmU0TZtYl.ByEIYOjH85yeqYQhcwlxc91IW5CUsC39XYyx.', NULL, NULL, 1, 0, 'l'),
(11, '$2y$10$ynsRpFex7IrlKB.Ws6DR/uROphWU77Fj0i90KfNY3RsX4dA.1LHXC', NULL, NULL, 1, 0, 'Bbop');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;


