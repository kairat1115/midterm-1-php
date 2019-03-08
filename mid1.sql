-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2019 at 02:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mid1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tweet` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `user_id`, `tweet`, `post_date`) VALUES
(3, 1, '&lt;h3 id=&quot;titles-text-and-links&quot;&gt;&lt;div&gt;Titles, text, and links&lt;/div&gt;&lt;/h3&gt;<br />\r\n&lt;p&gt;Card titles are used by adding &lt;code class=&quot;highlighter-rouge&quot;&gt;.card-title&lt;/code&gt; to a &lt;code class=&quot;highlighter-rouge&quot;&gt;&lt;h*&gt;&lt;/h*&gt;&lt;/code&gt; tag. In the same way, links are added and placed next to each other by adding &lt;code class=&quot;highlighter-rouge&quot;&gt;.card-link&lt;/code&gt; to an &lt;code class=&quot;highlighter-rouge&quot;&gt;&lt;a&gt;&lt;/a&gt;&lt;/code&gt;&lt;a&gt; tag.&lt;/a&gt;&lt;/p&gt;&lt;a&gt;<br />\r\n<br />\r\n&lt;p&gt;Subtitles are used by adding a &lt;code class=&quot;highlighter-rouge&quot;&gt;.card-subtitle&lt;/code&gt; to a &lt;code class=&quot;highlighter-rouge&quot;&gt;&lt;h*&gt;&lt;/h*&gt;&lt;/code&gt; tag. If the &lt;code class=&quot;highlighter-rouge&quot;&gt;.card-title&lt;/code&gt; and the &lt;code class=&quot;highlighter-rouge&quot;&gt;.card-subtitle&lt;/code&gt; items are placed in a &lt;code class=&quot;highlighter-rouge&quot;&gt;.card-body&lt;/code&gt; item, the card title and subtitle are aligned nicely.&lt;/p&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n&lt;/a&gt;&lt;div class=&quot;bd-example&quot;&gt;&lt;a&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n&lt;/a&gt;&lt;div class=&quot;card&quot; style=&quot;width: 18rem;&quot;&gt;&lt;a&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n  &lt;/a&gt;&lt;div class=&quot;card-body&quot;&gt;&lt;a&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;h6 class=&quot;card-subtitle mb-2 text-muted&quot;&gt;Card subtitle&lt;/h6&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card\'s content.&lt;/p&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;/a&gt;&lt;a href=&quot;https://getbootstrap.com/docs/4.0/components/card/#&quot; class=&quot;card-link&quot;&gt;Card link&lt;/a&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;a href=&quot;https://getbootstrap.com/docs/4.0/components/card/#&quot; class=&quot;card-link&quot;&gt;Another link&lt;/a&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n  &lt;/div&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n&lt;/div&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n&lt;/div&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n&lt;div class=&quot;highlight&quot;&gt;&lt;pre&gt;&lt;code class=&quot;language-html&quot; data-lang=&quot;html&quot;&gt;&lt;span class=&quot;nt&quot;&gt;&lt;div&lt; span=&quot;&quot;&gt; &lt;span class=&quot;na&quot;&gt;class=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;card&quot;&lt;/span&gt; &lt;span class=&quot;na&quot;&gt;style=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;width: 18rem;&quot;&lt;/span&gt;&lt;span class=&quot;nt&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n  &lt;span class=&quot;nt&quot;&gt;&lt;div&lt; span=&quot;&quot;&gt; &lt;span class=&quot;na&quot;&gt;class=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;card-body&quot;&lt;/span&gt;&lt;span class=&quot;nt&quot;&gt;&amp;gt;&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;span class=&quot;nt&quot;&gt;&lt;h5&lt; span=&quot;&quot;&gt; &lt;span class=&quot;na&quot;&gt;class=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;card-title&quot;&lt;/span&gt;&lt;span class=&quot;nt&quot;&gt;&amp;gt;&lt;/span&gt;Card title&lt;span class=&quot;nt&quot;&gt;&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;span class=&quot;nt&quot;&gt;&lt;h6&lt; span=&quot;&quot;&gt; &lt;span class=&quot;na&quot;&gt;class=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;card-subtitle mb-2 text-muted&quot;&lt;/span&gt;&lt;span class=&quot;nt&quot;&gt;&amp;gt;&lt;/span&gt;Card subtitle&lt;span class=&quot;nt&quot;&gt;&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;span class=&quot;nt&quot;&gt;&lt;p&lt; span=&quot;&quot;&gt; &lt;span class=&quot;na&quot;&gt;class=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;card-text&quot;&lt;/span&gt;&lt;span class=&quot;nt&quot;&gt;&amp;gt;&lt;/span&gt;Some quick example text to build on the card title and make up the bulk of the card\'s content.&lt;span class=&quot;nt&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;span class=&quot;nt&quot;&gt;&lt;a&lt; span=&quot;&quot;&gt; &lt;span class=&quot;na&quot;&gt;href=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;#&quot;&lt;/span&gt; &lt;span class=&quot;na&quot;&gt;class=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;card-link&quot;&lt;/span&gt;&lt;span class=&quot;nt&quot;&gt;&amp;gt;&lt;/span&gt;Card link&lt;span class=&quot;nt&quot;&gt;&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n    &lt;span class=&quot;nt&quot;&gt;&lt;a&lt; span=&quot;&quot;&gt; &lt;span class=&quot;na&quot;&gt;href=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;#&quot;&lt;/span&gt; &lt;span class=&quot;na&quot;&gt;class=&lt;/span&gt;&lt;span class=&quot;s&quot;&gt;&quot;card-link&quot;&lt;/span&gt;&lt;span class=&quot;nt&quot;&gt;&amp;gt;&lt;/span&gt;Another link&lt;span class=&quot;nt&quot;&gt;&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n  &lt;span class=&quot;nt&quot;&gt;&lt;/span&gt;&lt;/a&lt;&gt;&lt;/span&gt;&lt;/a&lt;&gt;&lt;/span&gt;&lt;/p&lt;&gt;&lt;/span&gt;&lt;/h6&lt;&gt;&lt;/span&gt;&lt;/h5&lt;&gt;&lt;/span&gt;&lt;/div&lt;&gt;&lt;/span&gt;&lt;/div&lt;&gt;&lt;/span&gt;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;&lt;code class=&quot;language-html&quot; data-lang=&quot;html&quot;&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n&lt;span class=&quot;nt&quot;&gt;&lt;/span&gt;&lt;/code&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n&lt;br&gt;&lt;br&gt;&lt;br&gt;<br />\r\n', '2019-03-08 12:58:29'),
(6, 3, '&lt;p&gt;sadasdasdasd&lt;br&gt;&lt;/p&gt;&lt;p&gt;stahp&lt;br&gt;&lt;/p&gt;', '2019-03-08 12:58:04'),
(7, 1, '&lt;p&gt;&lt;iframe src=&quot;//www.youtube.com/embed/6hPG1fb4ftk&quot; class=&quot;note-video-clip&quot; width=&quot;640&quot; height=&quot;360&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;&lt;br&gt;&lt;/p&gt;', '2019-03-08 12:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`) VALUES
(1, 'admin@kairat.com', 'zxcvb', 'Kairat Amanzharov'),
(3, 'kairat@kairat.com', 'admin', 'Kaaaairat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tweets`
--
ALTER TABLE `tweets`
  ADD CONSTRAINT `tweets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
