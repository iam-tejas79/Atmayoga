-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 05:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atmayog`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(255) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_image` varchar(255) DEFAULT NULL,
  `course_category` varchar(255) DEFAULT NULL,
  `course_subheading` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_image`, `course_category`, `course_subheading`) VALUES
(12, 'Daily yoga', 'IMG-64298afcdd1bf6.90572107.png', 'yoga', 'The daily yoga is suitable for every person and will be beneficial for us in a very effective manner.'),
(13, 'Yoga for weight loss', 'IMG-64298cdaf413a2.72650641.jpg', 'yoga', 'Weight loss is a gradual process , some yoga techniques are really beneficial for weight loss .'),
(14, 'Yoga for weight gain', 'IMG-64298de99326a1.49127696.jpg', 'yoga', 'Weight gain using yoga is a process with patience.'),
(15, 'Breath work', 'IMG-64298ef17cb4b6.95971818.jpg', 'yoga', 'These yoga breathing techniques are often done to practice mindfulness.'),
(16, 'Postnatal yoga', 'IMG-64299080966984.33800100.jpg', 'yoga', 'This form of yoga focuses on recovery and restoration and can alleviate stress and depression after giving birth.'),
(17, 'Prenatal yoga', 'IMG-6429912f822330.61884489.png', 'yoga', 'Yoga before giving the birth can be relaxing and stress reliever.'),
(19, 'Yoga for adults', 'IMG-6429992fe4e312.81491262.png', 'yoga', 'There are some easy yoga techniques which an adult can practice for relaxation.');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mob` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `email`, `password`, `dob`, `mob`) VALUES
(1, 'Vaishnavi Kumbhakarna ', 'vaishnavikumbhakarna467@gmail.com', 'vaishnavi@12345', '2001-11-26', 1234567890),
(2, 'Tejas Dhabadkar', 'tejasdhabadkar01@gmail.com', 'tejas@12345', '2001-03-15', 1234567890),
(4, 'Vishakha Kasture', 'vishakha@gmail.com', 'vishakha@12345', '2002-09-30', 1234567890),
(5, 'Bharat Mapari', 'bharatm@gmail.com', 'bharat@12345', '2023-03-29', 1234567890),
(6, 'Bhakti Bongane', 'bhaktibongane123@gmail.com', 'bhakti@12345', '2023-03-04', 1234567890),
(7, 'Rutuja Khedkar', 'rutujakhedkar@gmail.com', 'rutuja@12345', '2023-03-07', 1234567890),
(8, 'Pawan Mhaske', 'pawanmhaske0987@gmail.com', 'pawan@12345', '2023-03-05', 1234567890),
(9, 'Sanket Ghode', 'sanketghode123@gmail.com', 'sanket@12345', '2023-03-29', 1234567890),
(10, 'Sujit Pachode', 'sujitpachode234@gmail.com', 'sujit@12345', '2023-03-01', 1234567890),
(11, 'Kaustubh Kumbhar', 'kaustubhkumbhar@gmail.com', 'kaustubgh@12345', '2023-03-09', 1234567890),
(12, 'Omkar Barge', 'omkarbarge1122@gmail.com', 'omkar@12345', '2023-03-15', 1234567890),
(13, 'Shravni Shrinewar', 'shravniss34@gmail.com', 'shravni@12345', '2023-03-15', 1234567890),
(14, 'admin', 'admin@gmail.com', 'admin', '2001-01-01', 1234567890),
(15, 'Yash Lokhande', 'yashlokhande@gmail.com', 'yash@12345', '2023-04-23', 1122334455),
(18, 'Gauri Shejul', 'gauri@gmail.com', 'gauri@12345', '2023-04-28', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `yoga`
--

CREATE TABLE `yoga` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `video` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yoga`
--

INSERT INTO `yoga` (`id`, `name`, `description`, `video`, `course_name`) VALUES
(7, 'Child pose', '1. Kneel on your hands and knees, with your hands in front of your shoulders and your knees about hip width apart, or wider if that is more comfortable and your big toes touching.\n\n2. As you exhale, lower your buttocks toward your heels as your torso rests on your thighs, or between your thighs, and your head rests on the floor or a block or cushion.\n\n3. Rest your arms alongside the thighs, palms facing up.\n\n4. Release the muscles around the spine and hips and take several slow breaths.', 'https://www.youtube.com/embed/qYvYsFrTI0U', 'Daily yoga'),
(8, 'Downware facing dog', '1. Start on your hands and knees, with your hands shoulder-distance apart and your knees under your hips, toes tucked.\n\n2. Inhale, press evenly into your palms and raise your knees off the ground.\n\n3. Lift your hips up and back, working to lengthen your spine. \n\n4. Exhale as you begin to straighten your legs as much as possible, heels reaching toward the ground. If your legs are straight, lift the thigh muscles strongly up as you press into the ground with your feet.\n\n5. Lift the shoulders away from the ears and flatten the shoulder blades on your back. Rotate your upper arms down towards the floor. Firm your outer hips in toward the center.\n\n6. Keep inhaling and exhaling evenly as you hold the pose.', 'https://www.youtube.com/embed/j97SSGsnCAQ', 'Daily yoga'),
(9, 'Plank', '1. Begin in Downward-Facing Dog pose.\n\n2. Inhale and shift forward until your body is in a straight line, shoulders stacked over your wrists and heels above the balls of the feet.\n\n3. Exhale as you press down through your forearms and hands, gazing at the floor in front of you. Imagine the back of your neck and spine lengthening.\n\n4. Keep breathing steadily as you hold the pose for as long as you can, engaging the core muscles by drawing your navel into the body and toward your spine. Keep your thighs lifted and your hips high, but don’t let your rear stick up too high.', 'https://www.youtube.com/embed/y1uinA_JknM', 'Daily yoga'),
(10, 'Cobra Pose', '1. Lie flat on your belly with your forehead on your mat and your toenails pressing into the mat.\n\n2. Place your hands under your shoulders, keeping your elbows close to your torso. Draw your navel up away from the mat.\n\n3. Inhale  and press your feet and legs into the mat, releasing your tailbone down  toward your pubis as you begin to straighten the arms to lift your head  and chest forward and up off the floor. Exhale.\n\n4. Inhale as you widen the chest and hold here for another breath or two.\n\n5. On an exhale, lower your head, neck and chest onto the floor.', 'https://www.youtube.com/embed/jwoTJNgh8BY', 'Daily yoga'),
(11, 'Tree Pose', '1. Stand on your mat, with your feet together, or slightly apart, if that is more comfortable. Take a couple of breaths.\n\n2. Slowly shift your weight to your right leg.\n\n3. Raise your left leg and clasp your ankle to guide the sole of the left foot to the inner thigh of the right leg. Try to keep your hips level.\n\n4. Press your foot against your thigh and your thigh against your foot. Lift up through your standing leg, core and chest.\n\n5. Breathe regularly as you hold the pose for a few breaths. You can bring your palms together at your chest, or raise your arms above your head if you feel stable enough. \n\n6. Lower your left leg and try the other side. ', 'https://www.youtube.com/embed/wdln9qWYloU', 'Daily yoga'),
(12, 'Triangle Pose', '1. Take  a wide stance, with your feet three and a half to four feet apart, depending on your size; taller people can take a wider stance.\n\n2. Turn  your left foot slightly to the right and your right foot out to the right 90 degrees. Your front heel should be in line with the arch of  your back foot. Firm your thighs and make sure that the center of the right knee is in line with the center of the right ankle.\n\n3. Inhale and raise your arms out to the sides, shoulder height.\n\n4. Exhale and reach your right arm to the right, lengthening your torso directly over the right leg as you move your hips to the left. \n\n5. Rest your right hand on your shin, ankle, or the floor outside your right foot. Keep the sides of the torso long.\n\n6. Stretch your left arm toward the ceiling, in line with the tops of your shoulders. Turn your torso up toward the ceiling. Keep your head in a neutral position or turn it to the left, eyes gazing at the left thumb.\n\n7. Stay and breathe for a minute; then come up and try the other side.', 'https://www.youtube.com/embed/S6gB0QHbWFE', 'Daily yoga'),
(13, 'Bridge Pose', '1. Lie on your back on your mat. Bend your knees and set your feet on the floor, with your heels close to your torso. Place your arms alongside your hips, palms down. Inhale.\n\n2. Exhale and, pressing your inner feet and palms into the floor, lift your hips up. Keep your thighs and inner feet parallel. \n\n3. Clasp the hands together underneath you if you can and extend through the arms to help you stay on the tops of your shoulders. \n\n4. Lift your buttocks until the thighs are about parallel to the floor. Use  your legs to support the lifting of the pelvis. Lengthen the tailbone toward the backs of the knees. Lift the pubis toward the navel.\n\n5. Lift your chin slightly away from the sternum and, firming the shoulder blades against your back, press the top of the sternum toward the chin. \n\n6. Stay in the pose for a few even breaths. On an exhalation, release and roll the spine slowly down onto the floor.\n\n', 'https://www.youtube.com/embed/dFTzC6xD4Lk', 'Daily yoga'),
(14, 'Virabhadrasana – Warrior Pose', 'Toning your thighs and shoulders, as well as improving your concentration has become more accessible and interesting with the Warrior II pose. The more you hold that pose, the better the results you gain. With just a few minutes of Virabhadrasana, you will get tighter quads.\n\nVirabhadrasana for weight loss\nWarrior III pose is made to improve your balance along with toning your back end, legs, and arms. It also helps to tone your tummy and give you a flat belly if you contract your abdominal muscles while you hold the position.', 'https://www.youtube.com/embed/sCReePaPF50', 'Yoga for weight loss'),
(15, 'Trikonasana – Triangle pose', 'The trikonasana helps to improve digestion as well as reduce the fat deposited in the belly & waist. It stimulates and improves blood circulation in the entire body. The lateral motion of this asana helps you burn more fat from the waist and build more muscles in the thighs and hamstrings.\n\nThough this pose does not make your muscles shake as others do, it does give you the benefit that other asanas do. It also improves balance & concentration.', 'https://www.youtube.com/embed/S6gB0QHbWFE', 'Yoga for weight loss'),
(16, 'Adho Mukha Svanasana – Downward Dog pose', 'Adho Mukha Svanasana tones your whole body with a little extra attention to specific muscles.  It helps to strengthen your arms, thighs, hamstring and back. Holding this pose and concentrating on your breathing engages your muscles and tones them, as well as improves your concentration and blood circulation.', 'https://www.youtube.com/embed/lZL7oh2lOgE', 'Yoga for weight loss'),
(17, 'Sarvangasana – Shoulder Stand Pose', 'Sarvangasana comes with multiple benefits, from increasing your strength to improving digestion. But it is known for boosting metabolism and balancing thyroid levels.  Sarvangasana Sarvangasana or the shoulder stand strengthens the upper body, abdominal muscles, and legs, improves the respiratory system, and improves sleep.', 'https://www.youtube.com/embed/VxVv3lQB5jk', 'Yoga for weight loss'),
(18, 'Dhanurasana – Bow Pose', 'Are you looking for the best way to lose that belly fat? Dhanurasana helps massage the abdominal organs, improves digestion, and strengthens the thighs, chest, and back. It stretches your whole body, strengthens and tones your muscles with improved blood circulation.', 'https://www.youtube.com/embed/02c6EtA2eGc', 'Yoga for weight loss'),
(19, 'Kapalbhati Pranayama', 'Make sure your spine is erect as you sit on the ground.   Place your palms on your knees.   Pull your navel back toward the spine as you inhale, and continue as long as you feel comfortable.   Relax your abdomen and navel as you exhale.   You need to take 20 such breaths for one round of this pose', 'https://www.youtube.com/embed/gyUHCCCOqX8', 'Yoga for weight gain'),
(20, 'Pavanamuktasana (Wind Relieving Pose)', 'Start by lying on your back, bend your knees, and lift your legs.   The next step is to raise your upper body until your thighs touch your stomach.  Keep this pose for 20-30 seconds by hugging your knees.', 'https://www.youtube.com/embed/MxT0esXh3Eo', 'Yoga for weight gain'),
(21, 'Virabhadrasana III (Warrior III Pose)', 'From a lunge position on the ground, bend your forward leg and straighten your back leg.   Look forward while lifting your arms above your head.   Next, place your hands in a prayer position by lowering your arms.   Then straighten out your bent knee and lean forward until your back leg is elevated.   Keep your gaze down while reaching your arms forward.  You should maintain this position for at least 30 seconds while balancing on your back leg.', 'https://www.youtube.com/embed/uEc5hrgIYx4', 'Yoga for weight gain'),
(22, 'Box Breathing', 'To prepare for this exercise, sit up straight and attempt to push the oxygen out of your lungs by breathing slowly out your mouth. Slowly breathe in through your nose for a count of 4. Focus on the air filling your lungs. Hold your breath for another count of 4. Breathe out through your mouth for a third count of 4. Pay attention to the sensation of the air leaving your body. Hold your breath again for a final count of 4. Continue to repeat these steps as much as desired.', 'https://www.youtube.com/embed/tEmt1Znux58', 'Breath work'),
(23, '4-7-8 Breathing', 'As you part your lips, breathe out through your mouth while making a whooshing sound. Close your mouth and inhale through your nose to the count of 4. Hold your breath for a count of 7. Make another whooshing sound as you breathe out your mouth for a count of 8. Repeat these steps as much as desired.', 'https://www.youtube.com/embed/1Dv-ldGLnIY', 'Breath Work'),
(24, 'Alternate Nostril Breathing', 'Sit down with your legs crossed. Place your left hand on your left knee and lift your right hand up to your nose. Breathe out, then close your right nostril with your right thumb. Breathe in through your left nostril, then use your fingers to close it. Release your thumb from your right nostril and breathe out through this side. Breathe in through your right nostril, then close it again with your thumb. Release your fingers from your left nostril and breathe out through this side. You’ve now completed a full cycle. Repeat as much as desired, being sure to end on a completed cycle.', 'https://www.youtube.com/embed/CcWhcmQyeNk', 'Breath Work'),
(25, 'Breath Focus Technique', 'Sit or lie down in a comfortable position. Pay attention to the way you’re breathing. Try not to change the way you breathe prior to this technique. Switch between normal breathing and deep breathing a few times, paying attention to how they differ from each other and how your abdomen moves. Take a few shallow breaths, noticing how they differ from your deep breaths. Continue to deep breathe for a few more minutes. Place a hand below your belly button as you relax your stomach. Pay attention to how it rises and falls as you continue to breathe. Every time you breathe out, let out a loud sigh. As you continue to breathe deeply, begin to focus on a relaxing image, word, or phrase of your choice. Imagine the air you breathe in is a wave bringing peace and calm into your body. You can mentally say “inhaling peace and calm” as you do this. As you breathe out, picture any negativity you’re feeling being washed away. You can mentally say “exhaling tension and anxiety” as you do this. You have now completed a breath focus session.', 'https://www.youtube.com/embed/fzevJRpLMrQ', 'Breath Work'),
(26, 'Plank Vinyasa', 'Get down on all fours with your wrists under your shoulders. Place a folded blanket under your wrists if you need support, or lower onto your forearms. To get into Plank position, straighten one leg at a time behind you, balancing on the balls of your feet, abs pulled up and in, and head in line with your spine (i.e., neither straining up nor hanging down).  Elongate your spine and press into the balls of your feet. Inhale, then exhale as you draw your right knee in toward your chest, contracting the muscles in your lower belly (shown). Return to Plank position, then switch legs. Alternate knee tucks for 8 to 20 reps.', 'https://www.youtube.com/embed/L29Zkv5d7S4', 'Postnatal yoga'),
(27, 'Locust Pose', 'Lie flat on your belly with your legs hipwidth apart on the floor. Rest your head on your hands (A). Clasp your hands behind your lower back to open through your chest and shoulders. Keep your spine long and squeeze your buttocks, pressing your hips into the floor as you lift your head, shoulders and legs off the mat, keeping your neck in line with your spine.  As you lift your legs up and out, tuck your tailbone under and keep your belly contracted and pulled away from the floor (B). Hold for 3 to 5 breaths, then lower to starting position. Repeat for 2 to 3 reps.', 'https://www.youtube.com/embed/d4vQed0pRzs', 'Postnatal yoga'),
(28, 'Pelvic Tilts', 'For this gentle postpartum yoga position, lie on your back with feet hip-width apart, your arms straight at your sides and palms down. Curl your tailbone under slightly, feeling your spine settle into the floor, which relieves pressure in the low back.  Inhale, then exhale as you lift your hips up slowly, tilting your pelvis as you tuck your tailbone under and scoop your lower belly in (shown). Hold for 1 to 2 breaths, then lower to starting position. Repeat for 5 to 10 reps.', 'https://www.youtube.com/embed/u0AJnVg0tcc', 'Postnatal yoga'),
(29, 'Legs Wide Pose', 'Lie on your back and lift your legs so your body forms a letter \"L.\" Lace your hands behind your head as you squeeze your ab muscles. Exhale as you lift your shoulders off the floor. Separate your legs a few inches, reaching one arm forward and between your legs.  Contract your lower belly as you reach (shown). Keep your upper body lifted as you bring your legs together and place your hands back behind your head. Switch sides and repeat for 8 to 10 reps.', 'https://www.youtube.com/embed/xO65_FHbEr0', 'Postnatal yoga'),
(30, 'Easy Pose', 'Begin seated and cross your legs in the way that is most comfortable for you with either the right or left leg in front. Sit up straight and feel length in your side body (waist). Lengthen your neck and allow your shoulders to move easily down and away from your ears by relaxing the trapezius muscles. Easy Pose can be practised with your back against a wall if you are feeling very fatigued. If you are in Easy Pose for an extended period (especially for meditation), sitting on top of a blanket or two can feel very comfortable.', 'https://www.youtube.com/embed/4J97THGPxoc', 'Prenatal yoga'),
(31, 'Unicorn and Rainbow Pose (Cow and Cat)', 'Begin on all fours with hands shoulder width apart and knees hip-width apart. Inhale and gaze to the sky, lifting the breastbone and the coccyx (tailbone) toward the sky as you softly contract in your lower back (see figure a). Exhale and round the spine in the shape of a rainbow. Take it easy with the pelvic tuck in the second and third trimesters, and focus more on the curve in the upper body (see figure b). You can use a folded blanket under your knees to cushion them. Or you can practice this sequence standing, with feet hips width apart, a soft bend in the knees, and hands on top of the thighs.', 'https://www.youtube.com/embed/kqnua4rHVVA', 'Prenatal yoga'),
(32, 'Pointer Dog Pose', 'Begin on all fours with hands shoulder width apart and knees hips width apart. Inhale and lift your left arm with the thumb pointed to the sky and your right leg to the height of the hip. Find length in the spine as you reach the front hand away from the back foot and feel a gentle lift in the abdomen, so that there is muscular support under the pose (see figure). Keep your neck long with the gaze about 12 inches ahead of the yoga mat. Enjoy three to five deep breaths and then change sides.', 'https://www.youtube.com/embed/VkspT5CySKM', 'Prenatal yoga'),
(33, 'Garland Pose', 'From Mountain Pose, step the feet a little wider than hip width and turn the toes out at a 45-degree angle, hands at the heart. Squat down until your hips are hovering above the floor. You can place a block or several folded blankets underneath the ischial tuberosities (sit bones) for support. This especially helps if your heels do not easily touch the floor in the deep squat. This position is also great for focusing on pelvic floor strength and can be a great shape for practising Kegels and other pelvic floor exercises.', 'https://www.youtube.com/embed/IXpJEqssze8', 'Prenatal yoga'),
(34, 'Puppy Pose', 'Stand with your feet hip-width apart and place your hands shoulder-width apart on a wall slightly above the height of your hips. Slowly walk your feet back until your torso is parallel with the ground. Contract the muscles in your thighs and lengthen your tailbone back as you reach the crown of your head forward.', 'https://www.youtube.com/embed/i1-bFRjloeI', 'Prenatal yoga'),
(35, 'Dancing Warrior', 'Begin in Warrior 1 or Crescent Lunge with the left leg forward (this is a matter of preference; both are strong lunges, and both are correct) with your arms alongside your ears. Open to Warrior 2 on the exhalation and reach your arms out to the sides of the room. Bend the front knee and keep the back leg straight, with the back foot turned out slightly (see figure a). As you inhale, float the left arm up and back as you bring your right hand to your hip or thigh, stretching the left side of your torso in Reverse Warrior (see figure b). Exhale and reach the right arm alongside your ear in Extended Side Angle as you place your left forearm on your front thigh (see figure c) or your right hand on the floor or the block. Take a moment in Goddess Pose before you change sides. Repeat the sequence on the left side.', 'https://www.youtube.com/embed/L7uCYad9GDc', 'Prenatal yoga'),
(36, 'Adho Mukha Svanasana', 'In this pose, you need to make an inverted ‘V’ with hands and feet pressing into the ground and the hips being lifted towards the ceiling You need to hold the pose for a few seconds or until your body allows you to. Adho Mukha Svanasana allows blood to flow into the brain, making the mind sharper and less prone to absent-mindedness. This inverted pose also plays a vital role in reducing stress levels. ', 'https://www.youtube.com/embed/lZL7oh2lOgE', 'Yoga for adults'),
(37, 'Trikonasana – Triangle pose', 'The trikonasana helps to improve digestion as well as reduce the fat deposited in the belly & waist. It stimulates and improves blood circulation in the entire body. The lateral motion of this asana helps you burn more fat from the waist and build more muscles in the thighs and hamstrings.  Though this pose does not make your muscles shake as others do, it does give you the benefit that other asanas do. It also improves balance & concentration.', 'https://www.youtube.com/embed/S6gB0QHbWFE', 'Yoga for adults'),
(38, 'Dhanurasana – Bow Pose', 'Are you looking for the best way to lose that belly fat? Dhanurasana helps massage the abdominal organs, improves digestion, and strengthens the thighs, chest, and back. It stretches your whole body, strengthens and tones your muscles with improved blood circulation.', 'https://www.youtube.com/embed/02c6EtA2eGc', 'Yoga for adults'),
(39, 'Child pose', '1. Kneel on your hands and knees, with your hands in front of your shoulders and your knees about hip width apart, or wider if that is more comfortable and your big toes touching.  2. As you exhale, lower your buttocks toward your heels as your torso rests on your thighs, or between your thighs, and your head rests on the floor or a block or cushion.  3. Rest your arms alongside the thighs, palms facing up.  4. Release the muscles around the spine and hips and take several slow breaths.', 'https://www.youtube.com/embed/qYvYsFrTI0U', 'Yoga for adults'),
(40, 'Cobra Pose', '1. Lie flat on your belly with your forehead on your mat and your toenails pressing into the mat.  2. Place your hands under your shoulders, keeping your elbows close to your torso. Draw your navel up away from the mat.  3. Inhale  and press your feet and legs into the mat, releasing your tailbone down  toward your pubis as you begin to straighten the arms to lift your head  and chest forward and up off the floor. Exhale.  4. Inhale as you widen the chest and hold here for another breath or two.  5. On an exhale, lower your head, neck and chest onto the floor.', 'https://www.youtube.com/embed/jwoTJNgh8BY', 'Yoga for adults'),
(41, 'Bridge Pose', '1. Lie on your back on your mat. Bend your knees and set your feet on the floor, with your heels close to your torso. Place your arms alongside your hips, palms down. Inhale.  2. Exhale and, pressing your inner feet and palms into the floor, lift your hips up. Keep your thighs and inner feet parallel.   3. Clasp the hands together underneath you if you can and extend through the arms to help you stay on the tops of your shoulders.   4. Lift your buttocks until the thighs are about parallel to the floor. Use  your legs to support the lifting of the pelvis. Lengthen the tailbone toward the backs of the knees. Lift the pubis toward the navel.  5. Lift your chin slightly away from the sternum and, firming the shoulder blades against your back, press the top of the sternum toward the chin.   6. Stay in the pose for a few even breaths. On an exhalation, release and roll the spine slowly down onto the floor.', 'https://www.youtube.com/embed/dFTzC6xD4Lk', 'Yoga for adults'),
(42, 'Sarvangasana – Shoulder Stand Pose', 'Sarvangasana comes with multiple benefits, from increasing your strength to improving digestion. But it is known for boosting metabolism and balancing thyroid levels.  Sarvangasana Sarvangasana or the shoulder stand strengthens the upper body, abdominal muscles, and legs, improves the respiratory system, and improves sleep.', 'https://www.youtube.com/embed/VxVv3lQB5jk', 'Yoga for adults');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yoga`
--
ALTER TABLE `yoga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `yoga`
--
ALTER TABLE `yoga`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
