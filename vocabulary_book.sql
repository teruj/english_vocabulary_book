-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 27, 2020 at 09:50 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vocabulary_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_list`
--

CREATE TABLE `personal_list` (
  `id` int(11) NOT NULL,
  `sel_word` varchar(255) NOT NULL,
  `sel_PoS` varchar(100) DEFAULT NULL,
  `sel_pronunciation` varchar(100) DEFAULT NULL,
  `sel_e_meaning` varchar(255) DEFAULT NULL,
  `sel_m_meaning` varchar(255) DEFAULT NULL,
  `sel_e_sentence` text,
  `sel_m_sentence` text,
  `mastery` varchar(100) NOT NULL DEFAULT 'N',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_list`
--

INSERT INTO `personal_list` (`id`, `sel_word`, `sel_PoS`, `sel_pronunciation`, `sel_e_meaning`, `sel_m_meaning`, `sel_e_sentence`, `sel_m_sentence`, `mastery`, `user_id`) VALUES
(8, 'extant', 'adj.', 'ékstənt', 'Still in existence', '今なお残っている、現存の', 'The article is still in existence―still extant.', 'その品は今なお存している', 'C', 2),
(9, 'percolation', 'noun', 'p`ɚːkəléɪʃən', 'The seepage or filtration of a liquid through a porous substance.', '濾過(ろか)、浸透、パーコレーション', 'Generally, sencha is placed in water of around 70 degrees centigrade for one or two minutes for percolation.', '一般に70℃前後のお湯で淹れ、1～2分浸出する。', 'S', 2),
(10, 'astute', 'adj', 'əst(j)úːt', 'Quickly and critically discerning.', '明敏な、機敏な、抜けめのない、ずるい、(…に)抜けめがなくて', 'He is an astute man.', '彼は鋭い人間だ。', 'C', 2),
(11, 'squeamish', 'adj', 'skwíːmɪʃ', 'excessively fastidious and easily disgusted', 'ちょっとしたことでも)ショックを受ける、(道徳的に)潔癖すぎる、気難しい、すぐに吐き気を催す、むかつきやすい', 'so squeamish he would only touch the toilet handle with his elbow', '神経質すぎてひじでトイレのハンドルを触ることしかできない', 'N', 2),
(12, 'phony', 'adj', 'ˈ-fəni', '(informal) A person who assumes an identity or quality other than their own.', 'にせの、いんちきの、うその', 'I got sucked in on a lot of phony deals.', '何回もいかさまにだまされましたよ。', 'C', 1),
(13, 'gape', 'verb', 'géɪp', '(intransitive) To open the mouth wide, especially involuntarily, as in a yawn, anger, or surprise', '(驚いたり感心したりして)ぽかんと大口をあける、(…に)ぽかんと口をあけて見とれる、あくびをする、ぱくりと開く、大きく裂ける、大きく開く', 'gape in public', '人前であくびをする', 'C', 1),
(14, 'mimetic', 'adj', 'mɪméṭɪk', 'exhibiting mimicry', '擬態の、模倣の', 'Onomatopoeia and mimetic words', '擬音語、擬態語', 'N', 1),
(15, 'destitute', 'adj', 'déstət(j)ùːt', 'completely wanting or lacking', '衣食にも事を欠く、貧困な、貧窮した、貧困者たち、(…が)欠乏して、(…が)なくて', 'He is destitute of experiences.', '彼は経験に欠ける。', 'N', 1),
(16, 'photosynthesize', 'verb', '', '', '光合成する', 'To provide a process for efficiently producing a vegetable oil and fat from a structural material of a plant other than the seeds, while allowing the plant to photosynthesize continuously.', '植物体の光合成を継続させながら、種子以外の植物組織から植物油脂を効率的製造する方法の提供。', 'C', 1),
(21, 'adjourn', 'verb', 'ədʒˈɚːn', 'To postpone', '延期する、延会する、(…を)延期する', 'The Diet will adjourn for three month.', '国会は３ヶ月間休会になる。', 'S', 2),
(29, 'amenable', 'adj', 'əmíːnəbl', '', '〈人が〉〔助言_道理などに〕快く従って, 従順で〔to〕', '', '', 'C', 1),
(30, 'curtail', 'verb', 'kɚːtéɪl', '', '切り詰める、短縮する、省略する、削減する、縮小する、そぐ', 'curtail government expenditure', '政府支出を削減する.', 'C', 1),
(31, 'amphibian', 'adj', 'æmfíbiən', '', '両生類の', 'AMPHIBIAN AUTOMOBILE', '水陸両用自動車', 'C', 1),
(33, 'progeny', 'noun', 'prάdʒ(ə)ni', 'offspring; the product of reproduction or replication.', '子孫、(人・動物の)子供たち', 'HAEMATOPOIETIC STEM CELL AND PROGENY THEREOF AND THEIR USE', '造血幹細胞およびその子孫の検出およびその使用', 'C', 2),
(34, 'assuage', 'verb', 'əswéɪdʒ', 'provide physical relief, as from pain', '緩和する、やわらげる、なだめる、静める', 'Nothing could assuage his disappointment.', 'どんなものも彼の失望をやわらげることはできなかった.', 'C', 2),
(35, 'ambulate', 'verb', 'ˈæmbjʊlèɪt', '(intransitive) To walk; to relocate oneself under the power of one\'s own legs.', '歩く、動き回る', 'lose the ability to ambulate', '歩く能力を失う', 'C', 2),
(36, 'sulfur', 'noun', 'sˈʌlfɚ', '(uncountable) A chemical element (symbol S) with an atomic number of 16', '硫黄(いおう)、硫黄色、黄緑色', 'native sulfur', '天然の硫黄', 'S', 2),
(37, 'olfactory', 'adj', 'ɑlfˈæktəri', 'Concerning the sense of smell.', '嗅覚の、嗅官の', 'of or relating to the olfactory cortex of the cerebrum', '大脳の嗅覚皮質の、または、大脳の嗅覚皮質に関する', 'C', 2),
(38, 'hand in', 'verb', '', '(transitive) To give something to a responsible person', '(…を)(上司などへ)差し出す、提出する、(…を)(家人などへ)手渡しする', 'They handed in their homework.', '彼らは宿題を提出した.', 'C', 1),
(39, 'clemency', '', '', '(leniency and compassion shown toward offenders by a person or agency charged with administering justice)', '(気候の)温和、(特に、裁判や処罰に際してみせる)寛容、仁慈、情け深い処置', 'He supplicated the King for clemency.', '彼は、王に慈悲を請うた', 'S', 1),
(40, 'idiosyncrasy', 'noun', 'ìdiəsíŋkrəsi', 'a behavioral attribute that is distinctive and peculiar to an individual', '(一個人特有の)特質、特異性、性癖、(作家の)特有の表現法、風変わりな言行', 'Each person has his idiosyncrasy.', '人は各々独特の個性をそなえている。', 'S', 1),
(41, 'robust', 'adj', 'roʊbˈʌst', 'rough and crude', '強健な、たくましい、がっしりした、強い', 'a robust appetite', '旺盛な食欲', 'S', 1),
(42, 'excise', 'noun', 'éksɑɪz', 'A tax charged on goods produced within the country', '内国消費税、物品税', 'the excise on spirits', '酒類消費税', 'S', 1),
(43, 'watch', 'noun', '', '', '腕時計', '', '', 'C', 6),
(44, 'extremely', 'adv.', 'ekstríːmli', '(degree) To an extreme degree', '極端に，きわめて.', 'It pains me extremely to have to tell you this.', 'あなたにこれを告げなければならないとは実につらいことです.', 'S', 1),
(45, 'plod', 'verb', 'plάd', '(intransitive) To walk or move slowly and heavily or laboriously (+ on, through, over).', 'とぼとぼ歩く', 'The old man plodded along (the road). ', '老人は(道を)とぼとぼと歩いていった.', 'N', 17),
(46, 'antiquity', 'noun', 'æntíkwəṭi', 'an artifact surviving from the past', '過去から生き延びているもの', 'an odor of antiquity', '古風な感じ[趣].', 'N', 17),
(47, 'rash', 'adj', 'rˈæʃ', 'Acting too quickly without considering the risks and consequences; not careful; hasty', '気の早い、早まった、無謀な、向こう見ずな、無分別な、向こう見ずで、無分別で', 'Don\'t be rash.', 'むちゃなことをするな.', 'C', 17),
(48, 'predominant', 'adj', 'prɪdάmənənt', 'Common or widespread; prevalent.', '(他よりも)優勢な、有力な、卓越した、優勢で、主な、顕著な、目立った', 'Catholicism is the predominant religion in Ireland.', 'アイルランドではカトリックが支配的である.', 'C', 2),
(49, 'exploitation', 'noun', 'èksplɔɪtéɪʃən', 'an act that exploits or victimizes someone (treats them unfairly)', '開発、開拓、利己的利用、搾取', 'capitalistic exploitation of the working class', '労働者階級の資本主義的な搾取', 'C', 2),
(50, 'optimum', 'noun', 'άptəməm', 'The best or most advantageous; surpassing all others', '最適条件', 'the optimum temperature', '最適温度', 'N', 2),
(51, 'severance', 'noun', 'sév(ə)rəns', 'a personal or social separation (as between opposing factions)', '断絶、分離、切断、(雇用の)契約解除', 'the condition of a severance or rupture arising in a matter', '物事に断絶が生じること', 'S', 2),
(52, 'tailwind', 'noun', '', 'wind blowing in the same direction as the path of a ship or aircraft', '追い風', 'We had a fair wind [tailwind] all the time, making twenty knots.', '順風に乗って 20 ノットの航海を続けた.', 'N', 2),
(53, 'overcome', 'verb', '', '', '打ち勝つ', '', '', 'S', 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `role` varchar(1) NOT NULL DEFAULT 'U',
  `student` varchar(1) NOT NULL DEFAULT 'N',
  `nationality` varchar(255) NOT NULL,
  `mother_tongue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `passw`, `username`, `role`, `student`, `nationality`, `mother_tongue`) VALUES
(1, 'Winston', 'Churchill', '$2y$10$wkVukwt82pzk.fGOTPYxau75IxcNPrSfyh1QiUa1oC7S7O33NqPny', 'ab', 'A', 'N', 'Japanese', 'Japanese'),
(2, 'Abraham', 'Lincoln', '$2y$10$sDXq4FG5SxjdHAQZQj7QKujl/APRDn8gri.ZOPZscncm4YXUqKrEK', 'cd', 'U', 'N', 'us', 'english'),
(5, 'II', 'JJ', '$2y$10$9YAKBQuLt0oK8M9iffgrdeGQCo8GfzcrFMlofO9O5XumtxIdYt8b6', 'ij', 'A', 'Y', 'india', 'hindi'),
(6, 'KK', 'LL', '$2y$10$oCQ1e7IpLo2RhRS8aO14OOQEsggvY/UcsKDU9bYM4QN3y1aLQEJOG', 'kl', 'U', 'N', 'japan', 'japanese'),
(9, '太郎', '山田', '$2y$10$.rcSzjmOp6NRCn0zn.AxOeRgFlHbCEv4.kGK3/4CgUPDtMzx./8ni', 'taroY', 'U', 'Y', 'Japanese', 'Japanese'),
(10, '一郎', '山本', '$2y$10$dL54UALUf5WEU/7sgObuuOfsv/p3z7zt62wa.plyUpaUX.WcKCMKu', 'ichiroY', 'U', 'N', 'Japanese', 'Japanese'),
(11, 'Mike', 'Davis', '$2y$10$eEdCilJ1PHIVLSx7qIB4HO1Zk6tKgb8doRNRPygAew3QN47rB/uXi', 'MD', 'U', 'Y', 'US', 'English'),
(13, '次郎', '佐藤', '$2y$10$HFxXVI5uF9.sAN5E2sGnv.auB6pcgksuRV0rUcb0k8ICm2iSLjWJa', 'jiroS', 'U', 'N', 'Japanese', 'Japanese'),
(15, 'たけし', '田中', '$2y$10$xUO.Af6.6cCOqgPY3txQCeTibbcV.vqyXunszMvXK/4maVrymq2f6', 'takeshiT', 'U', 'Y', 'Japanese', 'Japanese'),
(16, 'Tom', 'Brown', '$2y$10$Pb9A5ttiKvkIfp36qHy62e2N4aLO0italwiXjUHB6MU4SSuWjMnXS', 'tombrown11', 'A', 'Y', 'UK', 'English'),
(17, 'Mikel', 'Cheng', '$2y$10$VtMyR1KikWEPgQ07lpgpvO6L6FOZI1OJuFhl5GQM.4pGKuRb7C8cS', 'mc', 'U', 'Y', 'Singapore', 'English'),
(18, 'Jiro', 'Ishii', '$2y$10$7sZqBlHk6UDo0DJ2fWOUvOURogOU69TJ7hIbcO8dm7NXB8F2uUjGe', 'jiroI', 'U', 'Y', 'France', 'French'),
(19, 'KKK', 'hhh', '$2y$10$ph7jVekn7py.MxNAi3Od/.2TFKZ.CX8e7Lb8TXRpA1XgTHvhEkeL2', 'kh', 'U', 'N', 'ja', 'ja');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `PoS` varchar(100) DEFAULT NULL,
  `pronunciation` varchar(100) DEFAULT NULL,
  `e_meaning` varchar(255) DEFAULT NULL,
  `m_meaning` varchar(255) DEFAULT NULL,
  `e_sentence` text,
  `m_sentence` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `word`, `PoS`, `pronunciation`, `e_meaning`, `m_meaning`, `e_sentence`, `m_sentence`, `user_id`) VALUES
(1, 'dog', '', 'dˈɔːg', 'dfigsjihaji', '犬', 'a hunting dog', '猟犬', 1),
(3, 'cat', 'noun', 'kˈæt', 'dihraih', 'ねこ', 'a stray cat', '野良猫', 1),
(12, 'extant', 'adj.', 'ékstənt', 'Still in existence', '今なお残っている、現存の', 'The article is still in existence―still extant.', 'その品は今なお存している', 2),
(13, 'percolation', 'noun', 'p`ɚːkəléɪʃən', 'The seepage or filtration of a liquid through a porous substance.', '濾過(ろか)、浸透、パーコレーション', 'Generally, sencha is placed in water of around 70 degrees centigrade for one or two minutes for percolation.', '一般に70℃前後のお湯で淹れ、1～2分浸出する。', 2),
(14, 'astute', 'adj', 'əst(j)úːt', 'Quickly and critically discerning.', '明敏な、機敏な、抜けめのない、ずるい、(…に)抜けめがなくて', 'He is an astute man.', '彼は鋭い人間だ。', 2),
(15, 'squeamish', 'adj', 'skwíːmɪʃ', 'excessively fastidious and easily disgusted', 'ちょっとしたことでも)ショックを受ける、(道徳的に)潔癖すぎる、気難しい、すぐに吐き気を催す、むかつきやすい', 'so squeamish he would only touch the toilet handle with his elbow', '神経質すぎてひじでトイレのハンドルを触ることしかできない', 2),
(16, 'phony', 'adj', 'ˈ-fəni', '(informal) A person who assumes an identity or quality other than their own.', 'にせの、いんちきの、うその', 'I got sucked in on a lot of phony deals.', '何回もいかさまにだまされましたよ。', 1),
(17, 'gape', 'verb', 'géɪp', '(intransitive) To open the mouth wide, especially involuntarily, as in a yawn, anger, or surprise', '(驚いたり感心したりして)ぽかんと大口をあける、(…に)ぽかんと口をあけて見とれる、あくびをする、ぱくりと開く、大きく裂ける、大きく開く', 'gape in public', '人前であくびをする', 1),
(18, 'mimetic', 'adj', 'mɪméṭɪk', 'exhibiting mimicry', '擬態の、模倣の', 'Onomatopoeia and mimetic words', '擬音語、擬態語', 1),
(19, 'destitute', 'adj', 'déstət(j)ùːt', 'completely wanting or lacking', '衣食にも事を欠く、貧困な、貧窮した、貧困者たち、(…が)欠乏して、(…が)なくて', 'He is destitute of experiences.', '彼は経験に欠ける。', 1),
(20, 'photosynthesize', 'verb', '', '', '光合成する', 'To provide a process for efficiently producing a vegetable oil and fat from a structural material of a plant other than the seeds, while allowing the plant to photosynthesize continuously.', '植物体の光合成を継続させながら、種子以外の植物組織から植物油脂を効率的製造する方法の提供。', 1),
(21, 'invincible', 'adj', 'ìnvínsəbl', 'Impossible to defeat, destroy or kill; too powerful to be defeated or overcome', '征服できない、無敵の、克服できない、頑強な', 'His name was known as an invincible army to his neighbors.', '近隣には常勝軍団としてその名がとどろいたといわれる。', 4),
(22, 'hardwood', 'noun', 'ˈhɑˌrdwʊd', 'The wood from any dicotyledonous tree, without regard to its hardness.', '硬材、堅木、広葉樹', 'I prefer hardwood floors to carpet.', '私はカーペットよりも硬い木の床が好きです。', 4),
(23, 'creed', 'noun', 'kríːd', 'That which is believed; accepted doctrine, especially religious doctrine; a particular set of beliefs; any summary of principles or opinions professed or adhered to.', '(宗教上の)信経、使徒信経、信条、信念、主義、綱領', 'The laws apply to everyone irrespective of race, creed or color.', 'その法律は人種宗教肌の色に関わらずすべての人に適用される。', 4),
(27, 'specify', 'verb', 'spésəfὰɪ', 'To state explicitly, or in detail, or as a condition.', '(…を)いちいち明示する、明細に言う、明示する、(…を)明細書に記入する、仕分けする', 'You must specify the file system type.', 'ファイルシステムの種類を特定する必要があります。', 4),
(28, 'adjourn', 'verb', 'ədʒˈɚːn', 'To postpone', '延期する、延会する、(…を)延期する', 'The Diet will adjourn for three month.', '国会は３ヶ月間休会になる。', 2),
(29, 'tavern', 'noun', 'tˈævɚn', 'A building containing a bar licensed to sell alcoholic drinks, and usually offering accommodation; an inn.', '居酒屋、バー、宿屋、はたご屋', 'I was given a hard time by a strange guy at the tavern.', '居酒屋で変なおっさんにからまれた。', 2),
(33, 'transient', 'verb', 'trˈænʃənt', 'Passing or disappearing with time; transitory', '一時の、瞬間的な、つかの間の、はかない、無常の、滞在の短い', 'Is this a transient thing?', 'これは、一過性のものですか？', 3),
(34, 'loch', 'noun', 'lάk', 'Alternative form of lohoch', '湖、(細長い)入り江', 'a monster that is said to live in Loch Ness, Scotland. called Nessie', 'ネッシーという,ネス湖にすむといわれる怪獣', 3),
(39, 'amenable', 'adj', 'əmíːnəbl', '', '〈人が〉〔助言_道理などに〕快く従って, 従順で〔to〕', '', '', 1),
(40, 'curtail', 'verb', 'kɚːtéɪl', '', '切り詰める、短縮する、省略する、削減する、縮小する、そぐ', 'curtail government expenditure', '政府支出を削減する.', 1),
(41, 'amphibian', 'adj', 'æmfíbiən', '', '両生類の', 'AMPHIBIAN AUTOMOBILE', '水陸両用自動車', 1),
(42, 'mountain', 'noun', '', '', '山', 'The mountain is big.', 'その山は大きい。', 7),
(43, 'progeny', 'noun', 'prάdʒ(ə)ni', 'offspring; the product of reproduction or replication.', '子孫、(人・動物の)子供たち', 'HAEMATOPOIETIC STEM CELL AND PROGENY THEREOF AND THEIR USE', '造血幹細胞およびその子孫の検出およびその使用', 2),
(44, 'assuage', 'verb', 'əswéɪdʒ', 'provide physical relief, as from pain', '緩和する、やわらげる、なだめる、静める', 'Nothing could assuage his disappointment.', 'どんなものも彼の失望をやわらげることはできなかった.', 2),
(45, 'ambulate', 'verb', 'ˈæmbjʊlèɪt', '(intransitive) To walk; to relocate oneself under the power of one\'s own legs.', '歩く、動き回る', 'lose the ability to ambulate', '歩く能力を失う', 2),
(46, 'sulfur', 'noun', 'sˈʌlfɚ', '(uncountable) A chemical element (symbol S) with an atomic number of 16', '硫黄(いおう)、硫黄色、黄緑色', 'native sulfur', '天然の硫黄', 2),
(47, 'olfactory', 'adj', 'ɑlfˈæktəri', 'Concerning the sense of smell.', '嗅覚の、嗅官の', 'of or relating to the olfactory cortex of the cerebrum', '大脳の嗅覚皮質の、または、大脳の嗅覚皮質に関する', 2),
(48, 'hand in', 'verb', '', '(transitive) To give something to a responsible person', '(…を)(上司などへ)差し出す、提出する、(…を)(家人などへ)手渡しする', 'They handed in their homework.', '彼らは宿題を提出した.', 1),
(49, 'clemency', '', '', '(leniency and compassion shown toward offenders by a person or agency charged with administering justice)', '(気候の)温和、(特に、裁判や処罰に際してみせる)寛容、仁慈、情け深い処置', 'He supplicated the King for clemency.', '彼は、王に慈悲を請うた', 1),
(50, 'idiosyncrasy', 'noun', 'ìdiəsíŋkrəsi', 'a behavioral attribute that is distinctive and peculiar to an individual', '(一個人特有の)特質、特異性、性癖、(作家の)特有の表現法、風変わりな言行', 'Each person has his idiosyncrasy.', '人は各々独特の個性をそなえている。', 1),
(51, 'robust', 'adj', 'roʊbˈʌst', 'rough and crude', '強健な、たくましい、がっしりした、強い', 'a robust appetite', '旺盛な食欲', 1),
(52, 'excise', 'noun', 'éksɑɪz', 'A tax charged on goods produced within the country', '内国消費税、物品税', 'the excise on spirits', '酒類消費税', 1),
(53, 'watch', 'noun', '', '', '腕時計', '', '', 6),
(54, 'feudal', 'noun', 'fjúːd', 'of or relating to or characteristic of feudalism', '領地の、封建(制度)の', 'a feudal lord', ' 領主, 大名', 2),
(58, 'extremely', 'adv.', 'ekstríːmli', '(degree) To an extreme degree', '極端に，きわめて.', 'It pains me extremely to have to tell you this.', 'あなたにこれを告げなければならないとは実につらいことです.', 1),
(62, 'plod', 'verb', 'plάd', '(intransitive) To walk or move slowly and heavily or laboriously (+ on, through, over).', 'とぼとぼ歩く', 'The old man plodded along (the road). ', '老人は(道を)とぼとぼと歩いていった.', 17),
(63, 'antiquity', 'noun', 'æntíkwəṭi', 'an artifact surviving from the past', '過去から生き延びているもの', 'an odor of antiquity', '古風な感じ[趣].', 17),
(64, 'rash', 'adj', 'rˈæʃ', 'Acting too quickly without considering the risks and consequences; not careful; hasty', '気の早い、早まった、無謀な、向こう見ずな、無分別な、向こう見ずで、無分別で', 'Don\'t be rash.', 'むちゃなことをするな.', 17),
(65, 'predominant', 'adj', 'prɪdάmənənt', 'Common or widespread; prevalent.', '(他よりも)優勢な、有力な、卓越した、優勢で、主な、顕著な、目立った', 'Catholicism is the predominant religion in Ireland.', 'アイルランドではカトリックが支配的である.', 2),
(66, 'exploitation', 'noun', 'èksplɔɪtéɪʃən', 'an act that exploits or victimizes someone (treats them unfairly)', '開発、開拓、利己的利用、搾取', 'capitalistic exploitation of the working class', '労働者階級の資本主義的な搾取', 2),
(68, 'optimum', 'noun', 'άptəməm', 'The best or most advantageous; surpassing all others', '最適条件', 'the optimum temperature', '最適温度', 2),
(69, 'severance', 'noun', 'sév(ə)rəns', 'a personal or social separation (as between opposing factions)', '断絶、分離、切断、(雇用の)契約解除', 'the condition of a severance or rupture arising in a matter', '物事に断絶が生じること', 2),
(70, 'tailwind', 'noun', '', 'wind blowing in the same direction as the path of a ship or aircraft', '追い風', 'We had a fair wind [tailwind] all the time, making twenty knots.', '順風に乗って 20 ノットの航海を続けた.', 2),
(71, 'overcome', 'verb', '', '', '打ち勝つ', '', '', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_list`
--
ALTER TABLE `personal_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_list`
--
ALTER TABLE `personal_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
