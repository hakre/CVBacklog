<?php
/**
 * heroku test script
 */
echo sys_get_temp_dir(); # /tmp

phpinfo();

echo '<pre>', file_get_contents('https://api.stackexchange.com/2.0/questions/9094558;9095447;9095467;9094968;9094402;9093797;9093562;9093146;9089783;9087082;9084337;9082707;9081675;9081111;9080657;9079944;9077207;5167184;9076342;9072069;9071573;9070940;9070839;9068719;9068768;9067771;9067088;9066994;9061759;9061661;9057044;9057251;9056444;9055134;9054532;7778131;8572908;8985923;9051000;2817609;2084370;973288;9048431;9048025;9047751;9044366;6724043;9046046;9045493;9037030;9029888;9040579;9039242;9036958;8964918;8957727;9029686;9031635;9031182;9017810;9022128;9021683;9012709;9020366;9020288;9019966;9019737;9018474;9017580;9017941;9002481;9016028;9011900;9008299;9010184;9008461;9007017;9002464;8999834;8989190;8992292;8983194;8978715;8971465;8971264;8971059;8970176;8965778;7573967;6411451;3126191;8964674;8964536;8963835;8961265;8961169;8961179;8961050;8960925;8960743?site=stackoverflow&filter=!3wg4GAnWbdQ5i*Hm.&pagesize=100&order=desc&sort=creation'), '</pre>';