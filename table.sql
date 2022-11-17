CREATE TABLE `coins` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `mc_swiss` varchar(255) NOT NULL,
  `mc_slima` varchar(255) NOT NULL,
  `mc_sam` varchar(255) NOT NULL,
  `mc_btc` varchar(255) NOT NULL,
  `mc_galla` varchar(255) NOT NULL,
  `cashback_swiss` varchar(255) NOT NULL,
  `cashback_slima` varchar(255) NOT NULL,
  `cashback_sam` varchar(255) NOT NULL,
  `cashback_btc` varchar(255) NOT NULL,
  `cashback_galla` varchar(255) NOT NULL,
  `rate_swiss` varchar(255) NOT NULL,
  `rate_slima` varchar(255) NOT NULL,
  `rate_sam` varchar(255) NOT NULL,
  `rate_btc` varchar(255) NOT NULL,
  `rate_galla` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;
INSERT INTO `coins` (`id`, `product`, `mc_swiss`, `mc_slima`, `mc_sam`, `mc_btc`, `mc_galla`, `cashback_swiss`, `cashback_slima`, `cashback_sam`, `cashback_btc`, `cashback_galla`, `rate_swiss`, `rate_slima`, `rate_sam`, `rate_btc`, `rate_galla`) VALUES
(1, '1/4 Coin', '45', '44', 'N/A', '52.5', '41', '22', '10', 'N/A', '21.5', '22', '49', '23', 'N/A', '41', '54'),
(2, '1/2 Coin', '45', '38', 'N/A', '49.5', '41', '22', '10', 'N/A', '21.5', '22', '49', '26', 'N/A', '43', '54'),
(3, 'Coin', '45', '36', 'N/A', '47.5', '41', '22', '10', 'N/A', '21.5', '22', '49', '28', 'N/A', '45', '54'),
(4, 'Coin 24 Karat', 'N/A', 'N/A', '50', 'N/A', 'N/A', 'N/A', 'N/A', '25', 'N/A', 'N/A', 'N/A', 'N/A', '50', 'N/A', 'N/A'),
(5, 'Coin 40 Gram (Five Pound)', 'N/A', 'N/A', 'N/A', 'N/A', '41', 'N/A', 'N/A', 'N/A', 'N/A', '22', 'N/A', 'N/A', 'N/A', 'N/A', '54');




--
-- Indexes for dumped tables
--
CREATE TABLE `small` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `mc_swiss` varchar(255) NOT NULL,
  `mc_slima` varchar(255) NOT NULL,
  `mc_sam` varchar(255) NOT NULL,
  `mc_btc` varchar(255) NOT NULL,
  `mc_galla` varchar(255) NOT NULL,
  `cashback_swiss` varchar(255) NOT NULL,
  `cashback_slima` varchar(255) NOT NULL,
  `cashback_sam` varchar(255) NOT NULL,
  `cashback_btc` varchar(255) NOT NULL,
  `cashback_galla` varchar(255) NOT NULL,
  `rate_swiss` varchar(255) NOT NULL,
  `rate_slima` varchar(255) NOT NULL,
  `rate_sam` varchar(255) NOT NULL,
  `rate_btc` varchar(255) NOT NULL,
  `rate_galla` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;
INSERT INTO `small` (`id`, `product`, `mc_swiss`, `mc_slima`, `mc_sam`, `mc_btc`, `mc_galla`, `cashback_swiss`, `cashback_slima`, `cashback_sam`, `cashback_btc`, `cashback_galla`, `rate_swiss`, `rate_slima`, `rate_sam`, `rate_btc`, `rate_galla`) VALUES
(1, '1/4 Gram', '80', 'N/A', 'N/A', 'N/A', 'N/A', '25', 'N/A', 'N/A', 'N/A', 'N/A', '31', 'N/A', 'N/A', 'N/A', 'N/A'),
(2, '1/2 Gram', '80', 'N/A', 'N/A', 'N/A', 'N/A', '25', 'N/A', 'N/A', 'N/A', 'N/A', '31', 'N/A', 'N/A', 'N/A', 'N/A'),
(3, 'Gram', '60', 'N/A', 'N/A', '65', 'N/A', '25', 'N/A', 'N/A', '24', 'N/A', '42', 'N/A', 'N/A', '37', 'N/A'),
(4, '2.5 Gram', '55', 'N/A', '50', '64', 'N/A', '25', 'N/A', '25', '24', 'N/A', '45', 'N/A', '50', '38', 'N/A'),
(5, '5 Gram', '55', 'N/A', '50', '58', '45', '25', 'N/A', '25', '24', '25', '45', 'N/A', '50', '41', '56'),
(6, '10 Gram', '55', '41', '50', '58', '45', '25', '13', '25', '24', '25', '45', '32', '50', '41', '56'),
(7, '20 Gram', '50', '41', '50', '54', '45', '25', '13', '25', '24', '25', '50', '32', '50', '44', '56'),
(8, '1/2 Ounce', 'N/A', 'N/A', 'N/A', 'N/A', '45', 'N/A', 'N/A', 'N/A', 'N/A', '25', 'N/A', 'N/A', 'N/A', 'N/A', '56');




--
-- Indexes for dumped tables
--
CREATE TABLE `large` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `mc_swiss` varchar(255) NOT NULL,
  `mc_slima` varchar(255) NOT NULL,
  `mc_sam` varchar(255) NOT NULL,
  `mc_btc` varchar(255) NOT NULL,
  `mc_galla` varchar(255) NOT NULL,
  `cashback_swiss` varchar(255) NOT NULL,
  `cashback_slima` varchar(255) NOT NULL,
  `cashback_sam` varchar(255) NOT NULL,
  `cashback_btc` varchar(255) NOT NULL,
  `cashback_galla` varchar(255) NOT NULL,
  `rate_swiss` varchar(255) NOT NULL,
  `rate_slima` varchar(255) NOT NULL,
  `rate_sam` varchar(255) NOT NULL,
  `rate_btc` varchar(255) NOT NULL,
  `rate_galla` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;
INSERT INTO `large` (`id`, `product`, `mc_swiss`, `mc_slima`, `mc_sam`, `mc_btc`, `mc_galla`, `cashback_swiss`, `cashback_slima`, `cashback_sam`, `cashback_btc`, `cashback_galla`, `rate_swiss`, `rate_slima`, `rate_sam`, `rate_btc`, `rate_galla`) VALUES
(1, 'Ounce', '50', '41', '50', '54', '45', '25', '13', '25', '24', '25', '50', '32', '50', '44', '56'),
(2, '50 Gram', '42.5', '30', '42.5', '44.5', '37', '16', '13', '16', '15.5', '16', '38', '43', '38', '35', '43'),
(3, '100 Gram', '42.5', '30', '42.5', '44.5', '37', '16', '13', '16', '15.5', '16', '38', '43', '38', '35', '43');




--
-- Indexes for dumped tables
--
CREATE TABLE `bar` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `mc_swiss` varchar(255) NOT NULL,
  `mc_slima` varchar(255) NOT NULL,
  `mc_sam` varchar(255) NOT NULL,
  `mc_btc` varchar(255) NOT NULL,
  `mc_galla` varchar(255) NOT NULL,
  `cashback_swiss` varchar(255) NOT NULL,
  `cashback_slima` varchar(255) NOT NULL,
  `cashback_sam` varchar(255) NOT NULL,
  `cashback_btc` varchar(255) NOT NULL,
  `cashback_galla` varchar(255) NOT NULL,
  `rate_swiss` varchar(255) NOT NULL,
  `rate_slima` varchar(255) NOT NULL,
  `rate_sam` varchar(255) NOT NULL,
  `rate_btc` varchar(255) NOT NULL,
  `rate_galla` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;
INSERT INTO `bar` (`id`, `product`, `mc_swiss`, `mc_slima`, `mc_sam`, `mc_btc`, `mc_galla`, `cashback_swiss`, `cashback_slima`, `cashback_sam`, `cashback_btc`, `cashback_galla`, `rate_swiss`, `rate_slima`, `rate_sam`, `rate_btc`, `rate_galla`) VALUES
(1, '250 Gram', '25', '21', '16', '27.5', 'N/A', '15', '10', '12', '14', 'N/A', '60', '48', '75', '51', 'N/A'),
(2, '500 Gram', '25', '20', '16', '26.5', 'N/A', '14', '10', '12', '14', 'N/A', '56', '50', '75', '54', 'N/A'),
(3, '1000 Gram', '24', '19', '16', '25.05', 'N/A', '13', '10', '16', '14', 'N/A', '54', '53', '100', '56', 'N/A');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- Indexes for table `small`
--
ALTER TABLE `small`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- Indexes for table `large`
--
ALTER TABLE `large`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- Indexes for table `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
  --
-- AUTO_INCREMENT for table `small`
--
ALTER TABLE `small`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
  --
-- AUTO_INCREMENT for table `large`
--
ALTER TABLE `large`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
  --
-- AUTO_INCREMENT for table `bar`
--
ALTER TABLE `bar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;