-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 12 日 09:25
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ibobao5`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'e27dec95d040a33634ce70de9381e19e');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `member_id` int(20) DEFAULT NULL,
  `articleclass_id` int(11) DEFAULT NULL,
  `entitle` varchar(255) DEFAULT NULL,
  `chtitle` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `cont` mediumtext,
  `recommend` int(11) DEFAULT '0',
  `date_add` int(11) DEFAULT NULL,
  `count_click` int(11) DEFAULT '0',
  `count_reply` int(11) DEFAULT '0',
  `count_collect` int(11) DEFAULT '0',
  `source` varchar(255) DEFAULT NULL,
  `translate` varchar(255) DEFAULT NULL,
  `redact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `member_id`, `articleclass_id`, `entitle`, `chtitle`, `img`, `cont`, `recommend`, `date_add`, `count_click`, `count_reply`, `count_collect`, `source`, `translate`, `redact`) VALUES
(11, NULL, 3, 'The Researchers Developed A New Material, Hardness Is Higher Than Diamond', '美研究人员研发出新物质,硬度比钻石还高', '1449561163555.png', 'There is a new substance that is harder than diamond. It&amp;#39;s called Q-carbon, and it was created by researchers at North Carolina State University.<br>\n北卡罗莱纳州立大学的研究人员研发出一种名为“Q-碳”的新物质，其硬度比钻石还高。<br>\n<br>\n&amp;quot;The only place it may be found in the natural world would be possibly in the core of some planets,&amp;quot; Jay Narayan, lead author on the papers describing the work, said in a statement.<br>\n研究论文的第一作者杰伊·纳拉杨在声明中说：“自然界中，可能也就只有在某些行星的内核处能找到这种物质了。”<br>\n<br>\nBefore its discovery, there were two distinct forms of solid carbon: graphite and diamond. Q-carbon is not only harder than diamond, but also glows when exposed to low levels of energy. That could make it very useful for creating strong, bright screens for electronic devices.<br>\n该物质被发现前，固体碳只有两种不同形态：石墨和钻石。Q-碳不仅硬度比钻石高，处于低能量状态下还能发光。这种特性使它尤其适用于制造电子设备坚硬、明亮的显示屏。<br>\n<br>\nResearchers created the Q-carbon by blasting material covered in amorphous carbon (i.e. carbon without a crystalline structure) with a single laser pulse.<br>\n要想生成Q-碳，研究人员需利用单脉冲激光冲激材料表面的无定形碳（即无晶体结构的碳）。<br>\n<br>\nThey can cool the material to create either Q-carbon or tiny diamonds. Those diamonds could be used to build things such as microneedles for medical use, or electronics that can withstand extremely high temperatures for other industries.<br>\n然后将材料冷却，即可得到Q-碳或碎钻。这种钻石可以用来制作医用微型针头，或是用来制造能耐极端高温的工业电子元件。<br>\n<br>\n&amp;quot;And it is all done at room temperature and at ambient atmosphere — we&amp;#39;re basically using a laser like the ones used for laser eye surgery,&amp;quot; Narayan said. &amp;quot;So, not only does this allow us to develop new applications, but the process itself is relatively inexpensive.&amp;quot;<br>\n“这一系列过程都是在室温和普通的大气环境下完成的，我们所用的激光也和眼部激光手术用的那种差不多，”纳拉杨说道。“因此，我们不仅能继续研发这种物质的新用途，而且研发成本也相对低廉。”<br>\n', 0, 1449561163, 13, 0, 0, '英语点津', NULL, NULL),
(12, NULL, 2, 'In Those Years The Day Do Things', '那些年那些天非做不可的事情', '1449561787185.jpg', '　　Age has reached the end of the beginning of a word. May be guilty in his seems to passing a lot of different life became the appearance of the same day; May be back in the past, to oneself the paranoid weird belief disillusionment, these days, my mind has been very messy, in my mind constantly. Always feel oneself should go to do something, or write something. Twenty years of life trajectory deeply shallow, suddenly feel something, do it.<br>\n<br>\n　　一字开头的年龄已经到了尾声。或许是愧疚于自己似乎把转瞬即逝的很多个不同的日子过成了同一天的样子；或许是追溯过去，对自己那些近乎偏执的怪异信念的醒悟，这些天以来，思绪一直很凌乱，在脑海中不断纠缠。总觉得自己自己似乎应该去做点什么，或者写点什么。二十年的人生轨迹深深浅浅，突然就感觉到有些事情，非做不可了。<br>\n<br>\n　　The end of our life, and can meet many things really do?<br>\n<br>\n　　而穷尽我们的一生，又能遇到多少事情是真正地非做不可？<br>\n<br>\nDuring my childhood, think lucky money and new clothes are necessary for New Year, but as the advance of the age, will be more and more found that those things are optional; Junior high school, thought to have a crush on just means that the real growth, but over the past three years later, his writing of alumni in peace, suddenly found that isn&amp;#39;t really grow up, it seems is not so important; Then in high school, think don&amp;#39;t want to give vent to out your inner voice can be in the high school children of the feelings in a period, but was eventually infarction when graduation party in the throat, later again stood on the pitch he has sweat profusely, looked at his thrown a basketball hoops, suddenly found himself has already can&amp;#39;t remember his appearance.<br>\n<br>\n　　童年时，觉得压岁钱和新衣服是过年必备，但是随着年龄的推进，会越来越发现，那些东西根本就可有可无；初中时，以为要有一场暗恋才意味着真正的成长，但三年过去后，自己心平气和的写同学录的时候，突然就发现是不是真正的成长了，好像并没有那么重要了；然后到了高中，觉得非要吐露出自己的心声才能为高中生涯里的懵懂情愫划上一个句点，但毕业晚会的时候最终还是被梗塞在了咽喉，后来再次站在他曾经挥汗如雨的球场，看着他投过篮球的球框时，突然间发现自己已经想不起他的容颜。<br>\n<br>\nOriginally, this world, can produce a chemical reaction to an event, in addition to resolutely, have to do, and time.<br>\n<br>\n　　原来，这个世界上，对某个事件能产生化学反应的，除了非做不可的坚决，还有，时间。<br>\n<br>\nA person&amp;#39;s time, your ideas are always special to clear. Want, want, line is clear, as if nothing could shake his. Also once seemed to be determined to do something, but more often is he backed out at last. Dislike his cowardice, finally found that there are a lot of love, there are a lot of miss, like shadow really have been doomed. Those who do, just green years oneself give oneself an arm injection, or is a self-righteous spiritual.<br>\n<br>\n　　一个人的时候，自己的想法总是特别地清晰。想要的，不想要的，界限明确，好像没有什么可以撼动自己。也曾经好像已经下定了决心去做某件事，但更多的时候是最后又打起了退堂鼓。嫌恶过自己的怯懦，最终却发现有很多缘分，有很多错过，好像冥冥之中真的已经注定。那些曾经所谓的非做不可，只是青葱年华里自己给自己注射的一支强心剂，或者说，是自以为是的精神寄托罢了。<br>\n<br>\n　　At the moment, the sky is dark, the air is fresh factor after just rained. Suddenly thought of blue plaid shirt; Those were broken into various shapes of stationery; From the corner at the beginning of deep friendship; Have declared the end of the encounter that haven&amp;#39;t start planning... Those years, those days of do, finally, like youth, will end in our life.<br>\n<br>\n　　此刻，天空是阴暗的，空气里有着刚下过雨之后的清新因子。突然想到那件蓝格子衬衫；那些被折成各种各样形状的信纸；那段从街角深巷伊始的友谊；还有那场还没有开始就宣告了终结的邂逅计划……那些年那些天的非做不可，终于和青春一样，都将在我们的人生中谢幕。<br>\n', 0, 1449561787, 20, 0, 0, '文章阅读网', NULL, NULL),
(13, NULL, 6, 'The Lazy Song', '懒汉之歌', '1449562179476.jpg', 'Today I don&amp;#39;t feel like doing anything<br>\n今天什么都不想干<br>\nI just wanna lay in my bed<br>\n爷就想窝在被窝里头<br>\nDon&amp;#39;t feel like picking up my phone<br>\n就是不想接电话<br>\nSo leave a message at the tone<br>\n所以你就留个言呗<br>\n&amp;#39;Cause today I swear I&amp;#39;m not doing anything<br>\n因为我发誓，今天什么都不干<br>\n<br>\nI&amp;#39;m gonna kick my feet up<br>\n把脚翘老高<br>\nThen stare at the fan<br>\n瞪着风扇发愣<br>\nTurn the TV on, throw my hand down my pants<br>\n打开电视，把手塞进裤子里<br>\nNobody&amp;#39;s gonna tell me I can&amp;#39;t<br>\n谁都别告诉我我不能~<br>\n<br>\nI&amp;#39;ll be lying on the couch,<br>\n我会歪在沙发上<br>\nJust chillin&amp;#39; in my snuggie<br>\n窝在我温暖的窝窝里<br>\nClick to MTV, so they can teach me how to dougie<br>\n换到MTV台，看他们教我跳舞<br>\n&amp;#39;Cause in my castle I&amp;#39;m the freaking man<br>\n因为在我的城堡上，我就是爷！<br>\nOh, oh<br>\n哦~<br>\n<br>\nYes I said it<br>\n是啊，我说了<br>\nI said it<br>\n我说了<br>\nI said it &amp;#39;cause I can<br>\n我就说了！怎么的吧！<br>\n<br>\nToday I don’t feel like doing anything<br>\n爷TM今儿毛都不想干<br>\nI just wanna lay in my bed<br>\n爷就想窝在被窝里头<br>\nDon’t feel like picking up my phone<br>\n就是不想接电话捏<br>\nSo leave a message at the tone<br>\n所以你就留个言呗<br>\n&amp;#39;Cause today I swear I&amp;#39;m not doing anything<br>\n因为爷发誓，今儿爷毛都不干<br>\nNothing at all<br>\n毛也不干~<br>\n<br>\nTomorrow I&amp;#39;ll wake up, do some P90X<br>\n明儿我会爬起来，做点儿健身操<br>\nMeet a really nice girl, have some really nice sex<br>\n认识个超棒的妞儿，做点儿超棒的爱<br>\nShe&amp;#39;s gonna scream out: &amp;#39;This is Great&amp;#39;<br>\n她会大叫：“丫太牛B了！”<br>\n[Hear me out: this is great]<br>\n【听到没啊：太牛了！】<br>\nYeah<br>\n耶~<br>\n<br>\nI might mess around, get my college degree<br>\n我可能也瞎晃悠晃悠，搞个文凭啥的<br>\nI bet my old man will be so proud of me<br>\n那我老爹可得骄傲了<br>\nBut sorry paps, you&amp;#39;ll just have to wait<br>\n但是不好意思了老爹，您还得再等等<br>\nOh, oh<br>\n哦~<br>\n<br>\nYes I said it<br>\n是啊，我说了<br>\nI said it<br>\n我说了<br>\nI said it &amp;#39;cause I can<br>\n我就说了！怎么的吧！<br>\n<br>\nToday I don’t feel like doing anything<br>\n我今天什么都不想干<br>\nI just wanna lay in my bed<br>\n我就想窝在被窝里头<br>\nDon’t feel like picking up my phone<br>\n就是不想接电话捏<br>\nSo leave a message at the tone<br>\n所以你就留个言呗<br>\n&amp;#39;Cause today I swear I&amp;#39;m not doing anything<br>\n因为我发誓，今儿我毛都不干<br>\n<br>\nNo, I ain&amp;#39;t gonna comb my hair<br>\n不~我连头发都不梳~<br>\n&amp;#39;Cause I ain&amp;#39;t going anywhere<br>\n因为我哪儿都没打算去~<br>\nNo, no, no, no, no, no, no, no, no, oh<br>\n不不不不不~没打算去~<br>\n<br>\nI&amp;#39;ll just strut in my birthday suit<br>\n我就光着屁股大摇大摆<br>\nAnd let everything hang loose<br>\n一切都放轻松点儿<br>\nYeah, yeah, yeah, yeah, yeah, yeah, yeah, yeah, yeah-eah<br>\n啊啊啊啊啊放轻松点儿~<br>\n<br>\nOh<br>\n哦~<br>\nToday I don’t feel like doing anything<br>\n今天我什么都不想干<br>\nI just wanna lay in my bed<br>\n我就想窝在被窝里头<br>\nDon’t feel like picking up my phone<br>\n就是不想接电话捏<br>\nSo leave a message at the tone<br>\n所以你就留个言呗<br>\n&amp;#39;Cause today I swear I&amp;#39;m not doing anything<br>\n因为我发誓，今天我什么都不干<br>\n<br>\nNothing at all<br>\n啥都不干<br>\nNothing at all<br>\n啥都不干<br>\nNothing at all<br>\n啥都不干', 0, 1449562179, 14, 0, 0, '', NULL, NULL),
(14, NULL, 2, 'The Rainy Season Has Come', '雨季已经来了', '1449800379694.jpg', '	Season is usually no shortage of rain. The rainy season has come, the ** underground. Stop, under the circumstances; under the circumstances, stop. Air is humid, laundry day, do not. Grass grown strong. Various sub-strains are out. Green first bacteria cow do bacteria, fungi Cantharellus ... ... rice field soil by rain flooding was **, each block is very ** fields are very delicate. Savings of the thin layer of water to stay on the clouds. People wearing hats, the new seedlings off into thin soft mud ... ... But, as has occasionally years, late rainy season, water shortages, no less than planted seedlings. This is the case. Since usually no shortage of rain, farmers here are not prepared to keel water. They use a scoop,** on both sides of the rope, from the muddy river put little by little the mud poured into the nursery where the seedling field. But this little bit of water, only to keep the seedlings do not die, can not be relied planting. Seedlings have grown too long, and not inserted on the point of death. However, paddy fields are actually the **. The fields were flat the whole face, a layer of sun-node thin shell, together, together fragmented into slit. Look at how many people looked up and days, look how many times a day. However, a fatal sky blue. Days, the color of people&amp;#39;s eyes are put video of the blue. Rain Yes, how can you not under it! Yes Rain, rain it!<br>\n<br>\n	栽秧时节通常是不缺雨的。雨季已经来了，三天两头地下着。停停，下下；下下，停停。空气是潮湿的，洗的衣服当天干不了。草长得很旺盛。各种菌子都出来了。青头菌、牛干菌、鸡油菌……稻田里的泥土被雨水浸得透透的，每块田都显得很膏腴，很细腻。积蓄着的薄薄的水面上停留着云影。人们戴着斗笠，把新拔下的秧苗插进稀软的泥里……但是偶尔也有那样的年月，雨季来晚了，缺水，栽不下秧。今年就是这样。因为通常不缺雨水，这里的农民都不预备龙骨水车。他们用一个戽斗，扯动着两边的绳子，从小河里把浑浊的泥浆一点一点地浇进育苗的秧田里。但是这一点点水，只能保住秧苗不枯死，不能靠它插秧。秧苗已经长得过长了，再不插就不行了。然而稻田里却是干干的。整得平平的田面，晒得结了一层薄壳，裂成一道一道细缝。多少人仰起头来看天，一天看多少次。然而天蓝得要命。天的颜色把人的眼睛都映蓝了。雨呀，你怎么还不下呀！雨呀，雨呀！<br>\n<br>\n	Wangershan also to look on the rise. Wangershan look at the father and mother, he saw their eyes are blue. Wangershan blue eyes also. Bow their heads to watch him, he saw the mud surface of the rice fields have to join together with traces of螺狮climb. Wangershan want an idea: rainmakers. Wangershan yesterday rainmakers to see the next village children, he thought: We have also rainmakers.<br>\n<br>\n	望儿也抬头望天。望儿看看爸爸和妈妈，他看见他们的眼睛是蓝的。望儿的眼睛也是蓝的。他低头看地，他看见稻田里的泥面上有一道一道螺狮爬过的痕迹。望儿想了一个主意：求雨。望儿昨天看见邻村的孩子求雨，他就想过：我们也求雨。<br>\n<br>\n	He called together the village children to identify a set of small gongs snare drum, we set out.<br>\n<br>\n	他把村里的孩子都叫在一起，找出一套小锣小鼓，就出发了。<br>\n<br>\n	A total of more than a dozen children, a big ten years old, only the smallest of the six-year-old. This is a skinny, ragged, and some fouling, but it is the sacred team. On their heads, wearing a wicker hat into the ring, beating no beat, monotonous small gongs snare drum: Dongdong when, Dongdong when ... ... they walked slowly. Go for some, the Wangershanput gong mallet in one fell swoop, they would sing together: a small child crying, sowing the seedlings may not be planted. Old world look forward to rain, wind and heavy rain and Ukraine together. The tone is very simple, just put words in accordance with the Kunming elongated read out a divergence in pronunciation. Their voices are, and devout. These children have not read the book. Vague to someone they have heard of the Jade, there is a Dragon King, Dragon King of the Rainy are tube. However, the majority of children even do not know Jade Emperor and Dragon King. They only know days, days are impermanent. It is sometimes very good people, they are sometimes merciless, it is very hard heart. They use their voices moving day, let it rain. (This place is not big rainmakers and elsewhere, are using child rainmakers. Wangershan so that they can find a set of small gongs snare drum. Perhaps people think that day will be great affection children, due to the child&amp;#39;s pleas and for being soft-hearted.) They wore wicker circle snare drum beating small gongs, singing, and walking in the streets of Kunming. Little children crying **, sowing the seedlings may not be planted. Old world look forward to rain, wind and heavy rain and Ukraine together. Pedestrian crossings to slow down the pace, or simply stop looking at this small, ragged team. Their eyes are also blue. Wangershan Baimamiao village at the north. Them from the big Simon has gone through Huashan Road West, Jinbi Road, from the East came back on the road.them away, they are still very small. On the bubble Spicy,ate corn meal, have climbed on the bed asleep. One slept on the fell asleep. Middle of the night, called aWangershan awakened. Then, he heard crackling black tiles onvoices. After a while, he was conscious from: rain! He yelled up: &amp;quot;Dad! Mom! Rainy!&amp;quot; He father his mother have been together, they go outside to watch the rain. They came into the room. Theygarb, wearing a<br>\nHats.on hats and dripping water. &amp;quot;Rain!&amp;quot;<br>\n<br>\n	一共十几个孩子，大的十来岁，最小的一个才六岁。这是一个枯瘦、褴褛、有些污脏的，然而却是神圣的队伍。他们头上戴着柳条编成的帽圈，敲着不成节拍的、单调的小锣小鼓：冬冬当，冬冬当……他们走得很慢。走一段，敲锣的望儿把锣槌一举，他们就唱起来：小小儿童哭哀哀，撒下秧苗不得栽。巴望老天下大雨，乌风暴雨一起来。调子是非常简单的，只是按照昆明话把字音拉长了念出来。他们的声音是凄苦的，虔诚的。这些孩子都没有读过书。他们有人模模糊糊地听说过有个玉皇大帝，还有个龙王，龙王是管下雨的。但是大部分孩子连玉皇大帝和龙王也不知道。他们只知道天，天是无常的。它有时对人很好，有时却是无情的，它的心很狠。他们要用他们的声音感动天，让它下雨。（这地方求雨和别处大不一样，都是利用孩子求雨。所以望儿他们能找出一套小锣小鼓。大概大人们以为天也会疼惜孩子，会因孩子的哀求而心软。）他们戴着柳条圈，敲着小锣小鼓，歌唱着，走在昆明的街上。小小儿童哭哀哀，撒下秧苗不得栽。巴望老天下大雨，乌风暴雨一起来。过路的行人放慢了脚步，或者干脆停下来，看着这支幼小的、褴褛的队伍。他们的眼睛也是蓝的。望儿的村子在白马庙的北边。他们从大西门，一直走过华山西路、金碧路，又从城东的公路上走回来。他们走得很累了，他们都还很小。就着泡辣子，吃了两碗包谷饭，就都爬到床上睡了。一睡就睡着了。半夜里，望儿叫一个炸雷惊醒了。接着，他听见屋瓦上噼噼啪啪的声音。过了一会，他才意识过来：下雨了！他大声喊起来：“爸！妈！下雨啦！”他爸他妈都已经起来了，他们到外面去看雨去了。他们进屋来了。他们披着蓑衣，戴着斗笠。斗笠和蓑衣上滴着水。“下雨了！”<br>\n<br>\n	&amp;quot;Rain!&amp;quot; Lamp mother put points up, one room is lighting. Light reflected at the mother eyes.** mother&amp;#39;s eyes, so bright. A father burned tobacco leaves, tobacco leaves and the flames reflected in the father&amp;#39;s face, but also reflected in his eyes.<br>\n<br>\n	“下雨了！”妈妈把油灯点起来，一屋子都是灯光。灯光映在妈妈的眼睛里。妈妈的眼睛好黑，好亮。爸爸烧了一杆叶子烟，叶子烟的火光映在爸爸的脸上，也映在他的眼睛里。<br>\n<br>\n	The next day, the seedlings! The village men, women and children are out, people are everywhere. Wangershan trust, which they are seeking rain down.<br>\n<br>\n	第二天，插秧了！全村的男女老少都出来了，到处都是人。望儿相信，这雨是他们求下来的。', 0, 1449800379, 8, 0, 0, '网络', '', ''),
(15, NULL, 4, 'About Love', '关于爱情', '1449801045478.jpg', '	When we come in the human world will never be destined to face human interaction, with the years of gradual but more and more mature.<br>\n<br>\n	当我们降临在人世间，从此便注定将面对人与人交往，随着岁月的渐进而走向成熟。<br>\n<br>\n	Sophisticated or not a person&amp;#39;s age are not just, perhaps too many are referring to awareness of emotions and grasp the extent of emotion.<br>\n<br>\n	一个人的成熟与否不是仅仅是年龄，或许过多的是指认识情感与把握情感的深浅程度。<br>\n<br>\n	The three conditions in life: affection, friendship, love. Perhaps these three emotions, the only love in life, the interpretation of a more exciting and rich. Affection and friendship it is a relationship between groups, but also can be a relationship between monomer. Only the doomed love between two people are emotional, but are only different from the affection and friendship, which only exist in the heterosexual feelings.<br>\n<br>\n	人生三大情：亲情、友情、爱情。或许这三大情感之中，唯有爱情在人生之中，演绎得更精彩与丰富。亲情与友情它是一个群体关系，也可以是一种单体关系。而唯有爱情注定是两个人之间的情感，而且是唯一区别于亲情与友情的，它只存在于异性之间的情感。<br>\n<br>\n	Love, there is no wrong, love is what everybody has a right to a free, a kind of instinct, a private affair, no one can hinder. Because love is a kind of emotional depth, is also a kind of emotional touch with the initiation. Love is diverse, and are multiple choice, we can have a love, love can also choose a. We can love any one person, whether some people love themselves, but also may refuse to love any one person, no matter how other people love their own.<br>\n<br>\n	爱，是没有错的，爱是一个人人都拥有的权利，一种自由，一种本能，一种私事，任何人都不能阻碍。因为爱是一种情感的深化，也是一种情感的触动与萌生。爱是多样的，而且是多重的选择，我们可以拥有一种爱，也可以选择一种爱。我们可以爱任何一个人，无论别人是否爱自己，也可拒绝任何一个人的爱，无论别人如何爱自己。<br>\n<br>\n	Love is a kind of consciousness and emotion, perhaps the first love, did not go too much about whether you win some and lose. It is undeniable that, regardless of the outcome of Department爱之深what, who can deny this love that feeling of it really?<br>\n<br>\n	爱是一种意识与情感，或许最初的爱意，原本没有过多的去计较是否有得有失。不可否认的是，爱之深处无论结局是什么，谁能否定这爱之情感的那份真切呢？<br>\n<br>\n	Love is a spiritual and emotional depths of the edge of real experience, and this feeling of human Forever is a very sweet, very touching. Walking in the human world, in the face from the side with the vision of the vast flow of people walked in, people can really love, but for the love and infatuated and also how much? So falling in love with a person is a happy thing, and get other people&amp;#39;s love is also a lucky thing.<br>\n<br>\n	爱是一种心灵深处与情感边缘的真切体验，而这种感觉对人永远是很甜美，也很动人。行走在人世间，面对从身边与视野里走过的茫茫人流，能真正让人去爱，而且为这爱而痴情的又有多少呢？所以爱上一个人是一件幸福的事，而得到别人的爱也是一种幸运的事。<br>\n<br>\n	Love, there was no mistake! Although the face of reality, too many secular, ethical, moral, false imprisonment and regulations of the interpretation of love. But if we want to cool one, this is a responsible love and protection. Love because love and cherish are required, as there is no rules, how can draw a perfect circle it?<br>\n<br>\n	爱，原本没有错！虽然面对现实，太多的世俗、伦理、道德、法规禁锢着爱的演绎。但如果我们冷静一想，这是对爱的一种负责与保护。因为爱是需要呵护与珍惜的，正如没有规矩，如何能画出一个完美的圆呢？<br>\n<br>\n	Love never is an indulgence, indulgent love with the true depth of less degree, this might love Forever is not the true meaning of love and nature.<br>\n<br>\n	爱决不是一种放纵，放纵的爱少了深度与真度，这样的爱或许永远不是爱的真谛与本质。<br>\n<br>\n	Two unfamiliar people originally came together because of love, it is not easy, because it is required of each other&amp;#39;s true feelings and trust to pay in order to form the true love. Which is due to the existence of love in between, but also the most vulnerable to injuries, but also very fragile, so it should be better cherish and protect the love of primary colors, rather than its loss.<br>\nLove, has never been wrong! Love is a very real emotion and soul of that pulsating!<br>\n<br>\n	两个原本陌生的人因爱走到了一起，就很不容易，因为那是需要彼此的真情与信任的付出，才能形成这份真爱的。而这爱因存在于两者之间，也最容易受伤，也很脆弱，所以就应更好的珍惜与保护这爱的原色，而不让其丢失。<br>\n爱，从来就没有错！爱是一种情感的真切与灵魂的那份悸动！<br>\n<br>\n	Love is a kind of icing on the cake of life, true love is a distillation of the precipitate after. Forever love because henme are emotional, it is doomed to love is not a harm, nor is it an incomplete. Whether because of their love and love, that is another matter.<br>\n<br>\n	爱是一种生活的锦上添花，爱是一份真情升华后的沉淀。因为爱永远是恒美的情感，也就注定爱不是一种伤害，也不是一种残缺。能否因爱而拥有其爱，那是另一回事。<br>\n<br>\n	As we often say: edge in man-made, were in an act of God, we should not contend with God&amp;#39;s arrangements. Sometimes more in need of love is a natural formation, rather than contributing to allocate Miller. Because love has its growth and a sophisticated process slowly.<br>\n<br>\n	正如我们常说：缘在人为，份在天意，我们不能与上帝的安排抗衡。有时的爱更需要的是一种自然形成，而非拨苗助长。因为爱有其成长与成熟的一个慢慢过程。<br>\n<br>\n	Love does not have a gain or loss because of the nature and positioning of love. To have this love, it is happiness, even if the loss, but also learn to calm. Regardless of gain and loss, are we to deny their love, the beauty that the feeling of it? Are we on the negation of their love is true or it?<br>\n<br>\n	爱并不是因为拥有得失而定位爱的本性的。能拥有这份爱，那是幸福，就算失落，也要学会坦然。无论得与失，难道我们就否定其爱的过程中，那份美丽的感觉吗？难道我们就该否定其爱的真假吗？', 0, 1449801045, 9, 0, 0, '网络', '', ''),
(16, NULL, 1, 'What Call Names Is Not Dirty', '如何骂人不带脏', '1449802603943.jpg', '　　1，Hey！wise up！放聪明点好吗？<br>\n<br>\n　　当别人做了蠢事时,你可以说,“Don&amp;#39;t be stupid！”或“Don&amp;#39;t be silly.”但这是非常不礼貌的说法。客气一点的说法就是：Wise up！你也可以用尖酸刻薄的语气说：Wise up, please.然后故意把please的尾音拉得长长的。<br>\n<br>\n　　2，Put up or shut up.要么你就去做，不然就给我闭嘴。<br>\n<br>\n　　要注意的是，Put up字典上查不到“自己去做”的意思,但口语表达则有此意。<br>\n<br>\n　　3，You eat with that mouth？你是用这张嘴吃饭的吗？<br>\n<br>\n　　别人对你说脏话,你就回敬他这句,言下之意是你的嘴那么脏,你还用它吃饭？还有一种说法：“You kiss your mother with that mouth？”你用这张脏嘴亲你妈妈吗？<br>\n<br>\n　　所以下次记得如果有老外对你说脏话,不要再骂回去,保持风度,说一句,“You eat with that mouth？”就扯平了。<br>\n<br>\n　　4，You are dead meat.你死定了。<br>\n<br>\n　　也可以说：“You are dead.”你完蛋了。<br>\n<br>\n　　5，Don&amp;#39;t you dare！How dare you！你好大的胆子啊！<br>\n<br>\n　　这句话可以在两种场合说,第一种是很严肃的场合,如小孩子很调皮,不听话，父母就会说,“Don&amp;#39;t you dare！”意思是你给我当心点,不然等会就要挨打了。另一种场合是开玩笑,如有人说他要跟某网友约会,你说“Don&amp;#39;t you dare？”就有点开玩笑的语气，你不怕被恐龙给吃了吗？<br>\n<br>\n　　6，Don&amp;#39;t push me around.不要摆布我。<br>\n<br>\n　　通常当我讲这句话时，我还会想到一个字“bossy”，像是老板一样,喜欢指挥别人。如：“You are so bossy. I Don&amp;#39;t like that.”这句话也可以单讲,“Don&amp;#39;t push me.”或“Don&amp;#39;t push me any further.”。<br>\n<br>\n　　7，You want to step outside？想到外去单挑吗？<br>\n<br>\n　　二个人一言不合吵起来了,可能就有人要说这句了，指的就是要不要出去打架啦。我还听过类似的用法,如：“Do you want to pick a fight？”你要挑起争端吗？<br>\n<br>\n　　8，You asked for it. 你自找的。<br>\n<br>\n　　9，Get over yourself. 别自以为是。 <br>\n<br>\n　　10，Give me a break. 饶了我吧。<br>\n<br>\n　　11，Look at this mess! 看看这烂摊子！<br>\n<br>\n　　12，Don’t nag me! 别在我面前唠叨！<br>\n<br>\n　　13，Mind your own business! 管好你自己的事！<br>\n<br>\n　　14，You’ve gone too far! 你太过分了！<br>\n<br>\n　　15，Can’t you do anything right? 成事不足，败事有余。<br>\n<br>\n　　16，You’re impossible. 你真不可救药。<br>\n<br>\n　　17，We’re through.我们完了！<br>\n', 0, 1449802603, 6, 0, 0, '网络', '', ''),
(17, NULL, 4, '10 Golden Rule In Life', '财富人生不可不知的10条金科玉律', '1449867451774.jpg', '1. I am not judged by the number of times I fail, but by the number of times I succeed: and the number of times I succeed is in direct proportion to the number of times I fail and keep trying.<br>\n<br>\n别人评判你的往往是成功的次数，没有人会特别在意你失败了多少次。而我成功的记录和屡败屡战的记录成正比。（霍普金斯）<br>\n<br>\n2. People do not start out with the search for facts，they start out with an opinion.<br>\n<br>\n有效的管理者都知道一项决策不是从搜集事实开始的，而是先有自己的见解。（彼得·德鲁克）<br>\n<br>\n3. The world breaks everyone, and afterward many are strong at the broken places.<br>\n<br>\n这世界会打击每一个人，但经历过后，许多人会在受伤的地方变得更强大。（欧内斯特·海明威）<br>\n<br>\n4. It&amp;#39;s exciting to have a vision, to persuade people to invest in what you&amp;#39;re building, and a privilege to see it play out, despite many a miserable and hard day.<br>\n<br>\n尽管要熬过许多痛苦艰难的日子，但拥有远大的抱负，说服大家投资你所构建的事业，并且有幸看到它的发展全过程还是非常令人兴奋的。（罗宾·蔡斯）<br>\n<br>\n5. Leaders need to recognize where their strengths and weaknesses are, and where the weaknesses are, they really want active followers to step up and help cover them.<br>\n<br>\n领袖要认识到自己的长处和短处，知道劣势在哪里后，让自己的下属帮助加以弥补。（杰弗里·阿什比）<br>\n<br>\n6. Everybody does something good, so there&amp;#39;s something in there that we could do.<br>\n<br>\n所有人都有长处。因此总有一些我们可以学习借鉴的地方。（山姆·沃尔顿）<br>\n<br>\n7. Without face-to face conversations, people are missing out on learning social skills.<br>\n<br>\n没有面对面的谈话，人们就无法学到社交技巧。（杰夫·弗勒）<br>\n<br>\n8. Only those who have the patience to do simple things perfectly ever acquire the skill to do difficult things easily.<br>\n<br>\n只有耐心圆满完成简单工作的人，才能够轻而易举地完成困难的事。（弗里德里希·席勒）<br>\n<br>\n9. As I grow older, I pay less attention to what men say. I just watch what they do.<br>\n<br>\n随着我渐渐变老，我越来越少在意人们在说些什么。我只观察他们做什么。（安德鲁·卡内基）<br>\n<br>\n10. If you keep your eye on the profit, you&amp;#39;re going to skimp on the product. But if you focuson making really great products, then the profits will follow.<br>\n<br>\n如果你的眼睛只盯着利润，你就会在产品上敷衍了事。但是如果你关注的是如何生产最棒的产品，利润自然滚滚而来。<br>\n', 0, 1449867451, 3, 0, 0, 'chinadaily', '', ''),
(18, NULL, 5, 'Will The Winter Be Bad', '今年冬天会不会很冷', '1449868169970.jpg', 'Indians ask their new chief whether the winter will be cold or mild. Since the young chief never learned the ways of his ancestors, he tells them to collect firewood, then he goes off and calls the National Weather Service.<br>\n印地安人问他们的新酋长，这个冬天是冷还是温暖。这位年轻的酋长从没学过祖先那些本领，他只好吩咐他们去捡木柴，然后自己走到一边去给国家气象局打电话。<br>\n<br>\n&amp;quot;Will the winter be bad?&amp;quot; he asks.<br>\n“今年冬天会不会很冷？”他问。<br>\n<br>\n&amp;quot;Looks like it,&amp;quot; is the answer.<br>\n“看上去是这样的。”他得到这样的回答。<br>\n<br>\nSo the chief tells his people to gather more firewood. A week later, he calls again.<br>\n于是酋长要求大家收集更多的木柴。一个星期后，他又打电话给国家气象局。<br>\n<br>\n&amp;quot;Are you positive the winter will be very cold?&amp;quot;<br>\n“你确信今年冬天会很冷？”<br>\n<br>\n&amp;quot;Absolutely.&amp;quot;<br>\n“毫无疑问。”<br>\n<br>\nThe chief tells his people to gather even more firewood, then calls the Weather Service again: &amp;quot;Are you sure?&amp;quot;<br>\n酋长随即要求族人捡更多的木柴，然后再次给国家气象局打电话：“你肯定吗？”<br>\n<br>\n&amp;quot;I&amp;#39;m telling you, it&amp;#39;s going to be the coldest winter on record.&amp;quot;<br>\n“我告诉你，那将是有史以来最寒冷的冬天。”<br>\n<br>\n&amp;quot;How do you know?&amp;quot;<br>\n“你怎么知道？”<br>\n<br>\n&amp;quot;Because the Indians are gathering firewood like crazy!&amp;quot;<br>\n“因为印第安人正发疯似地捡木柴！”', 0, 1449868169, 1, 0, 0, '沪江英语', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `articleclass`
--

CREATE TABLE IF NOT EXISTS `articleclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chname` varchar(255) DEFAULT NULL,
  `enname` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `articleclass`
--

INSERT INTO `articleclass` (`id`, `chname`, `enname`, `order`) VALUES
(1, '趣闻', 'amusing', NULL),
(2, '美文', 'fiction', NULL),
(3, '科技', 'science', NULL),
(4, '哲理', 'philosophy', NULL),
(5, '幽默', 'humor', NULL),
(6, '歌词', 'lyric', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `daysentence`
--

CREATE TABLE IF NOT EXISTS `daysentence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chcont` varchar(255) DEFAULT NULL,
  `encont` varchar(255) DEFAULT NULL,
  `inserttime` int(11) DEFAULT NULL,
  `setprinttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `daysentence`
--

INSERT INTO `daysentence` (`id`, `chcont`, `encont`, `inserttime`, `setprinttime`) VALUES
(3, '读书可以使我门的思想充实，谈话使其更臻完美。', 'By reading we enrich the mind; by conversation we polish it.', 1449560157, 0),
(5, '人不仅需要勇气站起来说话，也需要勇气坐下来倾听。', 'Courage is what it takes to stand up and speak. Courage is also what it takes to sit down and listen.', 1449866348, 0);

-- --------------------------------------------------------

--
-- 表的结构 `indexslide`
--

CREATE TABLE IF NOT EXISTS `indexslide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `date_add` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `indexslide`
--

INSERT INTO `indexslide` (`id`, `title`, `link`, `img`, `date_add`) VALUES
(3, '1', 'http://www.fastenglish.us/register', '1449560028657.png', 1449560028);

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(32) DEFAULT NULL,
  `upass` varchar(32) DEFAULT NULL,
  `register_time` int(11) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL,
  `login_ip` varchar(32) DEFAULT NULL,
  `register_ip` varchar(32) DEFAULT NULL,
  `ban` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`id`, `uname`, `upass`, `register_time`, `login_time`, `login_ip`, `register_ip`, `ban`) VALUES
(23, 'fastenglish', '1eafb66b3361a1a6dba92fb0686ea63f', 1449556370, NULL, NULL, '127.0.0.1', 0),
(24, 'xm', '1eafb66b3361a1a6dba92fb0686ea63f', 1449557859, NULL, NULL, '14.155.3.223', 0);

-- --------------------------------------------------------

--
-- 表的结构 `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `member_id` int(20) DEFAULT NULL,
  `member_uname` varchar(32) DEFAULT NULL,
  `encont` varchar(1024) DEFAULT NULL,
  `chcont` varchar(1024) DEFAULT NULL,
  `highlight` int(11) DEFAULT '0',
  `learn` int(11) DEFAULT '0',
  `fromarticleid` int(20) DEFAULT NULL,
  `timeinsert` int(11) DEFAULT NULL,
  `timelearn` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- 转存表中的数据 `note`
--

INSERT INTO `note` (`id`, `member_id`, `member_uname`, `encont`, `chcont`, `highlight`, `learn`, `fromarticleid`, `timeinsert`, `timelearn`) VALUES
(58, 23, 'fastenglish', 'fast english', '急速英语', 0, 0, 0, 1449556722, NULL),
(59, 23, 'fastenglish', '&amp;lt;ssssss&amp;gt;', '&amp;lt;是是是&amp;gt;', 0, 0, 0, 1449556793, NULL),
(60, 24, 'xm', 'test111111', '测试11111111111', 0, 0, 0, 1449557884, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
