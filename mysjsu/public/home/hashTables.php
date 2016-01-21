<?php
/*
	This File Provides Three different types of hash functions as listed below.

	instructorID("Robert Bruce");
	@returns 27

	courseID( "MATH 8" );
	@returns 115

	courseReverseID( "115" );
	@returns "Math 8"

*/

$instructorsHT = array(
"Ahmad Yazdankhah" => "1",
"Ahmed Ezzat" => "2",
"Aikaterini Potika" => "3",
"Anna Shaverdian" => "4",
"Cay Horstmann" => "5",
"Christopher Pollett" => "6",
"Debra Caires" => "7",
"Fain Butt" => "8",
"Faramarz Mortezaie" => "9",
"Feiling Jia" => "10",
"Francisco De La Calle" => "11",
"Huan Tseng" => "12",
"James Casaletto" => "13",
"James Morgan" => "14",
"Jon Pearce" => "15",
"Juan Gomez" => "16",
"Kathleen O'Brien" => "17",
"Kaushik Patra" => "18",
"Kong Li" => "19",
"Leonard Wesley" => "20",
"Maria Dalarcao" => "21",
"Mark Stamp" => "22",
"Melody Moh" => "23",
"Michael Finder" => "24",
"Mokhtar Zoubeidi" => "25",
"Prakash Atawale" => "26",
"Robert Bruce" => "27",
"Robert Chun" => "28",
"Ron Mak" => "29",
"Ronald Gutman" => "30",
"Saroj Sabherwal" => "31",
"Sharmin Khan" => "32",
"Staff" => "33",
"Suneuy Kim" => "34",
"Teng-Sheng Moh" => "35",
"Thomas Austin" => "36",
"Tsau-Young Lin" => "37",
"Vidya Rangasayee" => "38",
);

$coursesHT = array(
"CS 100W" => "1",
"CS 108" => "2",
"CS 116A" => "3",
"CS 116B" => "4",
"CS 120A" => "5",
"CS 122" => "6",
"CS 123A" => "7",
"CS 134" => "8",
"CS 143C" => "9",
"CS 146" => "10",
"CS 147" => "11",
"CS 149" => "12",
"CS 151" => "13",
"CS 152" => "14",
"CS 154" => "15",
"CS 155" => "16",
"CS 156" => "17",
"CS 157A" => "18",
"CS 157B" => "19",
"CS 158A" => "20",
"CS 159" => "21",
"CS 160" => "22",
"CS 161" => "23",
"CS 166" => "24",
"CS 174" => "25",
"CS 180H" => "26",
"CS 185C" => "27",
"CS 200W" => "28",
"CS 218" => "29",
"CS 223" => "30",
"CS 251B" => "31",
"CS 252" => "32",
"CS 255" => "33",
"CS 256" => "34",
"CS 259" => "35",
"CS 265" => "36",
"CS 267" => "37",
"CS 268" => "38",
"CS 274" => "39",
"CS 286" => "40",
"CS 40" => "41",
"CS 42" => "42",
"CS 46A" => "43",
"CS 46B" => "44",
"CS 47" => "45",
"CS 49C" => "46",
"CS 49J" => "47",
"MATH 10" => "48",
"MATH 102" => "49",
"MATH 104" => "50",
"MATH 105" => "51",
"MATH 106" => "52",
"MATH 108" => "53",
"MATH 112" => "54",
"MATH 115" => "55",
"MATH 12" => "56",
"MATH 123" => "57",
"MATH 123W" => "58",
"MATH 126" => "59",
"MATH 128A" => "60",
"MATH 128B" => "61",
"MATH 129A" => "62",
"MATH 131A" => "63",
"MATH 131B" => "64",
"MATH 133" => "65",
"MATH 133A" => "66",
"MATH 133B" => "67",
"MATH 133W" => "68",
"MATH 134" => "69",
"MATH 138" => "70",
"MATH 143C" => "71",
"MATH 15B" => "72",
"MATH 15C" => "73",
"MATH 15D" => "74",
"MATH 161A" => "75",
"MATH 161B" => "76",
"MATH 163" => "77",
"MATH 164" => "78",
"MATH 178" => "79",
"MATH 19" => "80",
"MATH 19W" => "81",
"MATH 201A" => "82",
"MATH 203" => "83",
"MATH 221A" => "84",
"MATH 221B" => "85",
"MATH 231A" => "86",
"MATH 243M" => "87",
"MATH 261A" => "88",
"MATH 261B" => "89",
"MATH 263" => "90",
"MATH 267" => "91",
"MATH 269" => "92",
"MATH 279A" => "93",
"MATH 279B" => "94",
"MATH 285" => "95",
"MATH 297" => "96",
"MATH 298I" => "97",
"MATH 30" => "98",
"MATH 30P" => "99",
"MATH 30PL" => "100",
"MATH 30W" => "101",
"MATH 31" => "102",
"MATH 31W" => "103",
"MATH 32" => "104",
"MATH 32W" => "105",
"MATH 3A" => "106",
"MATH 3B" => "107",
"MATH 42" => "108",
"MATH 42W" => "109",
"MATH 6A" => "110",
"MATH 6B" => "111",
"MATH 70" => "112",
"MATH 71" => "113",
"MATH 71W" => "114",
"MATH 8" => "115",
"MATH 8W" => "116",
"null null" => "117",
);

$coursesReversedHT = array(
"1" => "CS 100W",
"2" => "CS 108",
"3" => "CS 116A",
"4" => "CS 116B",
"5" => "CS 120A",
"6" => "CS 122",
"7" => "CS 123A",
"8" => "CS 134",
"9" => "CS 143C",
"10" => "CS 146",
"11" => "CS 147",
"12" => "CS 149",
"13" => "CS 151",
"14" => "CS 152",
"15" => "CS 154",
"16" => "CS 155",
"17" => "CS 156",
"18" => "CS 157A",
"19" => "CS 157B",
"20" => "CS 158A",
"21" => "CS 159",
"22" => "CS 160",
"23" => "CS 161",
"24" => "CS 166",
"25" => "CS 174",
"26" => "CS 180H",
"27" => "CS 185C",
"28" => "CS 200W",
"29" => "CS 218",
"30" => "CS 223",
"31" => "CS 251B",
"32" => "CS 252",
"33" => "CS 255",
"34" => "CS 256",
"35" => "CS 259",
"36" => "CS 265",
"37" => "CS 267",
"38" => "CS 268",
"39" => "CS 274",
"40" => "CS 286",
"41" => "CS 40",
"42" => "CS 42",
"43" => "CS 46A",
"44" => "CS 46B",
"45" => "CS 47",
"46" => "CS 49C",
"47" => "CS 49J",
"48" => "MATH 10",
"49" => "MATH 102",
"50" => "MATH 104",
"51" => "MATH 105",
"52" => "MATH 106",
"53" => "MATH 108",
"54" => "MATH 112",
"55" => "MATH 115",
"56" => "MATH 12",
"57" => "MATH 123",
"58" => "MATH 123W",
"59" => "MATH 126",
"60" => "MATH 128A",
"61" => "MATH 128B",
"62" => "MATH 129A",
"63" => "MATH 131A",
"64" => "MATH 131B",
"65" => "MATH 133",
"66" => "MATH 133A",
"67" => "MATH 133B",
"68" => "MATH 133W",
"69" => "MATH 134",
"70" => "MATH 138",
"71" => "MATH 143C",
"72" => "MATH 15B",
"73" => "MATH 15C",
"74" => "MATH 15D",
"75" => "MATH 161A",
"76" => "MATH 161B",
"77" => "MATH 163",
"78" => "MATH 164",
"79" => "MATH 178",
"80" => "MATH 19",
"81" => "MATH 19W",
"82" => "MATH 201A",
"83" => "MATH 203",
"84" => "MATH 221A",
"85" => "MATH 221B",
"86" => "MATH 231A",
"87" => "MATH 243M",
"88" => "MATH 261A",
"89" => "MATH 261B",
"90" => "MATH 263",
"91" => "MATH 267",
"92" => "MATH 269",
"93" => "MATH 279A",
"94" => "MATH 279B",
"95" => "MATH 285",
"96" => "MATH 297",
"97" => "MATH 298I",
"98" => "MATH 30",
"99" => "MATH 30P",
"100" => "MATH 30PL",
"101" => "MATH 30W",
"102" => "MATH 31",
"103" => "MATH 31W",
"104" => "MATH 32",
"105" => "MATH 32W",
"106" => "MATH 3A",
"107" => "MATH 3B",
"108" => "MATH 42",
"109" => "MATH 42W",
"110" => "MATH 6A",
"111" => "MATH 6B",
"112" => "MATH 70",
"113" => "MATH 71",
"114" => "MATH 71W",
"115" => "MATH 8",
"116" => "MATH 8W",
"117" => "null null",
);

function instructorID( $instructor ){
	global $instructorsHT;
	return $instructorsHT[ $instructor ];
}

function courseID( $course ){
	global $coursesHT;
	return $coursesHT[ $course ];
}

function courseReverseID( $courseID ){
	global $coursesReversedHT;
	return $coursesReversedHT[ $courseID ];
}
/*
echo "MATH 19"." = ".courseID( "MATH 19" )."<br>";
echo "MATH 19W"." = ".courseID( "MATH 19W" )."<br>";
echo "CS 49J"." = ".courseID( "CS 49J" )."<br>";
echo "CS 49C"." = ".courseID( "CS 49C" )."<br>";
echo "<br>Next Semester:<br>";
echo "MATH 42"." = ".courseID( "MATH 42" )."<br>";
echo "MATH 30"." = ".courseID( "MATH 30" )."<br>";
echo "MATH 30"." = ".courseID( "MATH 30W" )."<br>";
echo "MATH 42"." = ".courseID( "MATH 42" )."<br>";
echo "<br>Next Semester:<br>";
echo "CS 46A"." = ".courseID( "CS 46A" )."<br>";
echo "MATH 32"." = ".courseID( "MATH 32" )."<br>";
*/
echo "MATH 31"." = ".courseID( "MATH 31" )."<br>";
echo "MATH 129A"." = ".courseID( "MATH 129A" )."<br>";
echo "CS 146"." = ".courseID( "CS 146" )."<br>";
?>