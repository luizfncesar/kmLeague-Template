<?

###########INFO############
#description => english subtitles
#author => Krystian Zbikowski
#mail => webmaster@kmprojekt.pl
#www => http://kmprojekt.pl
##########################

define('ENCODING', 'ISO-8859-1');
define('XML_LANG', 'en');

$base = array(
'comments' => 'comments',
'news' => 'News',
'num_com' => 'No comments added.',
'new_com' => 'New comment',
'ban' => 'Your IP is banned.',
'smiles' => 'EMOTICONS',
'submit' => 'SUBMIT',
'comm_info' => 'You have to register/log in first. <a href="index.php?'.KML_LINK_SL.'op=reg">Register</a>',
'comment' => 'Comments to the news',
'comm_wait' => 'If you are impatient click on this link otherwise wait a moment',
'acc_block' => 'Your account is blocked or you aren\'t logged in.',
'mysql_err' => 'Database error ...',
'comm_added' => 'Comment added.',
'comm_emp' => 'Can\'t add an empty comment.',
'log_inc' => 'Name or password are incorrect. <a href="index.php?'.KML_LINK_SL.'op=fpass" class="menu">Forgot your password?</a><br />',
'prof_info' => 'Info',
'prof_photo' => 'Photo',
'prof_admin' => 'Admin',
'prof_logout' => 'Log out',
'file' => 'File',
'files' => 'Files',
'descr' => 'Description',
'sure' => 'sure ...',
'searching' => 'Searching',
'mysql_emp' => 'Nothing found ...',
'name' => 'Name',
'date' => 'Date',
'type' => 'Type',
'admin_team' => 'Crew',
'users' => 'Users',
'search_eng' => 'Search engines',
'next' => 'NEXT',
'fill_fields' => 'Fill in the fields',
'category' => 'Category',
'country' => 'Country',
'score' => 'Score',
'map' => 'Map',
'fields_error' => 'There are some empty fields.',
'zip_error' => 'You can submit only zip files.',
'dwlds2' => 'Downloads',
'close' => 'Close',
'get_file' => 'Download file',
'voices' => 'votes',
'added_by' => 'Added by',
'apprv_by' => 'Approved by',
'register_link' => '<a class="menu" href="index.php?'.KML_LINK_SL.'op=reg">Register</a>',
'register' => 'Register',
'data' => 'Data',
'password' => 'Password',
'rep_password' => 'Repeat password',
'notes' => 'Notes',
'reg_info' => 'All fields must be filled in.<br />Password can\'t include your login.<br /> Numbers in brackets indicate how many signs can be used here.',
'reg_info2'=>'<br /><span class="bold">You must approve the account so enter an existing email address.</span>',
'ereg_mail' => 'E-mail address is incorrect.<br />',
'ereg_login' => 'Login is too short.<br />',
'ereg_pass' => 'Passwords differ.<br />',
'ereg_pass2' => 'Password is too short.',
'ereg_pass3' => 'Password can\'t include your login.',
'ereg_login2' => 'Given Login name/mail already exists.',
'reg_add' => 'Account created.',
'usr_err' => 'This account doesn\'t exists.',
'edit' => 'EDIT',
'function' => 'Function',
'assistant' => 'Assistant',
'city' => 'City',
'birth' => 'Birth date',
'prof_clan' => 'Team',
'homesite' => 'Homesite',
'reg_date' => 'Register date',
'last_log' => 'Last log in',
'other_info' => 'Additional info',
'nick' => 'Nickname',
'website' => 'Website',
'prof_edit' => 'Profile edit',
'name_surn' => 'Name and Surname',
'clan_site' => 'Team Website',
'birth_info' => 'year,month,day',
'mail_info' => 'show e-mail to: ',
'save' => 'SAVE',
'reset' => 'RESET',
'pass_notes' => 'If you want to change your password, you must fill in the fields marked as *.',
'pass_err' => 'Passwords differ, are to short or include the login.<br />',
'pass_err2' => 'Old password is incorrect.<br />',
'info_sav' => 'Info saved',
'pass_sav' => ' Password changed.',
'guests' => 'Guests',
'registered' => 'Registered',
'announc' => 'Announcement',
'current_photo' => 'Current photo',
'photo_vis' => 'Photo is visible.',
'photo_hid' => 'Photo is hidden.',
'photo_info1' => 'Image\'s resolution must be 60x60 pixels or less.<br />',
'photo_info2' => 'You can add only JPG files.<br />',
'photo_info3' => 'File size must be less then 12 kB.<br />',
'photo_info4' => 'Photo changed (sometimes you need to reload the page to see the new one).<br />',
'set_ch' => 'Settings changed',
'upload' => 'Upload',
'photo_ask' => 'Show photo',
'profile' => 'Profile',
'log_in' => 'log in',
'old_pass' => 'Old password',
'new_pass' => 'New password',
'text' => 'Text',
'search' => 'Search',
'where' => 'Where',
'author' => 'Author',
'title' => 'title',
'title_con' => 'title and content',
'content' => 'content',
'searching_form' => 'Searching form',
'search_res' => 'Searching result',
'records' => 'records',
'poll_va' => 'You have already voted here.',
'poll_fin' => 'Poll is over.<br />',
'poll_nv' => 'No votes yet.',
'poll_st' => 'Poll started',
'poll_if' => ',is now finished',
'poll_ft' => 'finished at',
'active' => 'Active',
'voice_add' => 'Vote added',
'voice_err' => 'You have already voted here.',
'poll' => 'Poll',
'poll_nl' => 'If you want to vote log in first.',
'todayg' => 'Visitors today',
'details' => 'DETAILS',
'newest' => 'Newest',
'services' => 'Services',
'yes' => 'YES',
'no' => 'NO',
'authorize' => 'Account approval',
'reg_app' => 'Account approved.',
'fpass' => 'Password change',
'npass' => 'New password sent onto the choosen e-mail address, check it to authorize the change.',
'pass_app' => 'Password change approved.',
'ins_mail' => 'Write the e-mail address chosen during the registration.',
'add_demos' => 'Added demos',
'receiver' => 'Receiver',
'new_mess' => 'New messages',
'read' => 'Read',
'send_mess' => 'Send message',
'delete' => 'DELETE',
'pm_err1' => 'You must write the title and content of the message.<br />',
'pm_err2' => 'You must write the receiver\'s login.<br />',
'pm_err3' => 'Person chosen doesn\'t exist.<br />',
'mess_send' => 'Message sent.',
'pm_dr' => 'All read messages deleted.',
'pm_d' => 'Message deleted.',
'pm_dn' => 'All new messages deleted.',
'dell_all_mess' => 'Delete all messages',
'replay' => 'REPLY',
'mail_all' => 'all',
'mail_reg' => 'logged in',
'mail_hide' => 'no one',
'more' => 'more',
'show' => 'Show',
'dwld' => 'Download',
'posts' => 'Posts',
'list' => 'List',
'change' => 'Change',
'stats'=>'Stats',
'links'=>'Links',
'generated'=>'Generated',
'translat'=>'Translations',
'lang' => 'Language',
'countries' => 'Countries',
'remember' => 'remember',
'show_all'=>'show all',
'form_inf'=>'Write all information',
'add'=>'ADD',
'all'=>'All',
'other'=>'Other',
'archive'=>'Archive',
'sort'=>'Sort',
'lnews'=>'Latest news',
'menu'=>'Menu',
'acc_bl'=>'Your account is blocked.',
'poll'=>'Poll',
'ltopics'=>'Forum - Latest Topics',
'and'=>'and',
'or'=>'or',
'approve'=>'approve',
'pass_change'=>'password change',
'form_error1'=>'You must fill in the required fields.',
'form_error2'=>'You must fill in the fields marked as *.',
'vote'=>'vote',
'polls'=>'Polls',
'no_polls'=>'There are no polls available.',
'question'=>'Question',
'reg_mail'=>'Click on the link to approve your account (Link is valid for 3 days since the registration date).',
'login'=>'login',
'reg_add2'=>'Account added. You have to approve it. Necessary information was sent onto the chosen e-mail.',
'passc_mail'=>'Click on the link to approve the password change (Link is valid for 3 days since the date of the password change request).',
'mail_err'=>'Such an e-mail doesn\'t exist in users database.',
'new_account'=>'new account',
'welcome_msg'=>"Hello in Messenger\nUse it whenever u want ...\nRules are similar as these in adding comments, with a small difference, here u must write the message's receiver and title.\nIf someone will spam u on Messenger, don\'t delete these messages, just contact the website admin.\nIf u will spam remember about all possible consequences ...\n\nMessage was sent automatically, don\'t reply to it.",
'welcome_title'=>'Hello',
'of_all'=>'of all',
'usr_news'=>'Add news',
'codes'=>'CODES',
'flags'=>'FLAGS',
'tag_info'=>'<span class="bold">If you want to divide news into two parts (displayed on page),<br />you have to add in the news content chars %% in the place where you want to divide it.</span>',
'news_added'=>'News added, Thank you - wait for an admin to approve it.',
'never_login'=>'never logged in',
'pass_sent'=>'New password has been already sent.',
'clan2'=>'Team',
'poll'=>'Poll',
'on'=>'on',
'off'=>'off',
'awards'=>'Awards',
'comtype'=>'Communicator',
'comm'=>'Communicator\'s ID',
'pass_already_auth'=>'New password was already authorized or website address is incorrect.',
'account_already_auth'=>'Account was already authorized or website address is incorrect.',
'comm_edited'=>'Comment updated.',
'edit_comment'=>'Edit comment',
'edited'=>'Edited',
'comm_deleted'=>'Comment deleted.',
'timezone'=>'Time shift',
'rate'=>'Rate',
'dwlds'=>'Dwlds',
'voice_ch'=>'Vote changed',
'flag'=>'flag',
'powered_by'=>'Powered by KMleague',
'msg_new_message'=>'New message',
'asc'=>'increasing',
'desc'=>'decreasing',
'level'=>'Grade',
'encode'=>'Encode',
'forum'=>'Forum',
'online'=>'Online',
'powered_by'=>'Powered by',
'admin'=>'Admin\'s panel',
'messenger'=>'Messenger',
'languages'=>'Languages',
'watchers_here'=>'On this website',
'watchers_global'=>'On the whole portal',
#################
#new translations for 1.4
#################
'accepted'=>'Accepted',
'rejected'=>'Rejected',
'team_new'=>'Create new team',
'link_with_account'=>'Link with user account.',
'link'=>'LINK',
'player_link_with'=>'link player with account [login]: ',
'account_doesnt_exist'=>'Such user account doesn\'t exists.',
'request_sent'=>'Invitation sent.',
'player_link_removed'=>'Player is not linked with your team anymore.',
'not_approved'=>'NOT APPROVED',
'team_invite'=>'Team invitation',
'team_invite_content'=>'Team {{team_name}} invite you to join them. Check MY TEAMS to accept or refuse invitation.',
'player_teams'=>'My teams',
'team'=>'team',
'duel'=>'duel',
'accept'=>'ACCEPT',
'refuse'=>'REFUSE',
'your_invitation'=>'Your invitations',
'team_links'=>'Team links',
'team_invite_accepted'=>'Invitation for {{player_name}} accepted.',
'team_invite_rejected'=>'Invitation for {{player_name}} rejected/player quit from your team.',
'team_invite_changed'=>'{{player_name}} don\'t want to join your team anymore.',
'team_invite_wanna'=>'{{player_name}} want to join your team{{reason}}, check your PLAYERS INVITATION.',
'invitation_accepted'=>'Invitation accepted.',
'invitation_refused'=>'Invitation refused/team quited.',
'invitation_canceled'=>'Invitation canceled.',
'quit_team'=>'QUIT',
'players_invitation'=>'Players invitations',
'no_invitations'=>'There are no invitations.',
'join_team'=>'JOIN TEAM',
'player_invite_accepted'=>'Your invitation for {{team_name}} was ACCEPTED.',
'player_invite_refused'=>'Your invitation for {{team_name}} was REFUSED.',
'player_added'=>'Player added',
'invitation_refused2'=>'Invitation refused.',
'team_recruit'=>'Recruit',
'team_member'=>'Member',
'team_managment'=>'Team managment',
'team_roster'=>'Team roster',
'send_pm_mail'=>'Send mail when you get PM',
'mail'=>'E-mail',
'pm_info_mail'=>'You got PM at '.ADDRESS,
'pm_mail_header'=>'{{nick_name}} send you message:',
'pm_mail_foot'=>'This is automatical message don\'t replay through your mail box.',
'send_pm'=>'Send PM',
'registration_off'=>'Registration is turn off.',
'pm_new_match_title'=>'You have new match',
'pm_new_match_content'=>'Admins add your match<br/>{{idc1n}} : {{idc2n}}'."\n\n".'Match details are here: '.ADDRESS.'index.php?'.KML_LINK_SL.'op=descr&id={{idm}}'."\n\n".'You can read more about teams here:'."\n".'{{idc1n}} - '.ADDRESS.'index.php?'.KML_LINK_SL.'op=clans&id={{idc1}}<br/>{{idc2n}} - '.ADDRESS.'index.php?'.KML_LINK_SL.'op=clans&id={{idc2}}',
'pm_sent_msgs'=>'System sent {{amount}} messages.',
'roster_unactive'=>'Choosen roster is not active.',
'team_info'=>'Team Info',
'roster_empty'=>'Your roster is empty.',
'roster_date'=>'Roster date',
'roster_score'=>'Roster score',
'propose'=>'PROPOSE',
'vs'=>'vs',
'clan_join_passw'=>'Team\'s password',
'clan_join_reason'=>'Reason',
'player_joined'=>'New player joined',
'player_joined_pass'=>'{{player_name}} joined your team using team\'s password.',
'request_pass_added'=>'You were added to team.',
'request_pass_wrong'=>'Written password is incorrect.',
'special_table_empty'=>'Special table is empty.',
'special_table'=>'Special table'
);

$leagues = array(
'rules' => 'Rules',
'clan'=>'Team',
'clans'=>'Teams',
'demos'=>'Demos',
'group'=>'Group',
'clan_info'=>'Team Info',
'new_clanmts'=>'New Teammates',
'sqd_edit'=>'Squad Edit',
'clan_err'=>'This team doesn\'t exsist',
'cactive'=>'active',
'nactive'=>'not active',
'cregistered'=>'Registered',
'squad'=>'Squad',
'contact'=>'Contact (mail, icq ...)',
'sqd_edit_err'=>'You can\'t make any changes in the squad at the moment.',
'options'=>'Options',
'deleted'=>'deleted',
'group_err'=>'Chosen group doesn\'t exist yet.',
'points'=>'Points',
'wars'=>'Wars',
'wins'=>'Victories',
'lost'=>'Defeats',
'frags'=>'Frags',
'deaths'=>'Deaths',
'frg_m'=>'Frg/m',
'dts_m'=>'Dts/m',
'net'=>'Net',
'eff'=>'Eff',
'table_info'=>'Numbers in brackets indicate the number of maps &nbsp;<br />m - match &nbsp;',
'war'=>'War',
'gr_match'=>'Group match',
'maps'=>'Maps',
'scores'=>'Scores',
'scrns'=>'Screens',
'cmnts_match'=>'Match comments',
'match'=>'Match',
'match_dscr'=>'Match description',
'transfers'=>'Transfers',
'transfers'=>'Transfers',
'lg_serv'=>'League servers',
'referee'=>'Referee',
'no_playoffs'=>'There aren\'t any established/played play-off matches yet.',
'playoff'=>'Play-offs',
'for'=>'for',
'site_info'=>'Info',
'lmatch'=>'Latest matches',
'tabs'=>'Tables',
'edit_cinfo'=>'Team info edit',
'final'=>'FINAL',
'matches'=>'Matches',
'summary'=>'Summary',
'umatch'=>'Upcoming matches',
'schedule'=>'Schedule',
'schedule_err1'=>'No matches in the schedule.',
'all_matches'=>'All matches',
'round'=>'Round',
'groups'=>'Groups',
'm_other'=>'Other',
'cls_stats'=>'Teams stats',
'no_matches'=>'There aren\'t any played matches yet.',
'lstats'=>'Statistics',
'pld_matches'=>'Played matches',
'enmy'=>'Opponent',
'channel'=>'channel',
'm_all'=>'All',
'm_win'=>'Victories',
'm_lost'=>'Defeats',
'm_eff'=>'Efficiency',
'm_frg'=>'Frags/match',
'm_dts'=>'Deaths/match',
'm_frg2'=>'Frags/map',
'm_dts2'=>'Deaths/map',
'lg_stats'=>'League stats',
'all2'=>'from total',
'last_topic'=>'Forum - latest topics',
'most'=>'Most',
'least'=>'Least',
'pls_stats'=>'Players stats',
'bply'=>'Best player',
'number'=>'Number',
'gv_wo'=>'Lost by w/o',
'gt_wo'=>'Won by w/o',
'desc'=>'Decreasing',
'asc'=>'Increasing',
'interviews' => 'Articles',
'interview' => 'Article',
'no_interv' => 'No articles',
'skill' => 'Skill',
'sign' => 'Sign ups',
'sign_inf1'=>'All fields are required',
'sign_inf2'=>'Team added',
'signup_turnoff'=>'Sign ups are turned off.',
'ip'=>'ID',
'max_players'=>'Players limit reached, if u want to add a new player remove a different one.',
'pov'=>'Pov',
'func_war'=>'Captain',
'func_cl'=>'Team leader',
'no_info'=>'no info',
'reg_err'=>'If you want to sign up a team, you need to <a href="index.php?'.KML_LINK_SL.'op=reg">register</a> first.',
'sign_err'=>'Such team is already registered.',
'signed'=>'Signed by',
'squad_upd'=>'Squad updated.',
'clan_logo'=>'Team\'s Logo',
'logo_upl'=>'Logo uploaded.',
'logo_err1'=>'File size can\'t exceed 200 kb.',
'ranks'=>'Ranking',
'tag'=>'Tag',
'new_clan'=>'New team',
'new_clan_err'=>'Such team already exists.',
'clan_add'=>'Team added.',
'error_ident'=>'Such identificator already exists.',
'no_demos'=>'There aren\'t any demos yet.',
'ply_other'=>'Other',
'frags2'=>'Frags',
'deaths2'=>'Deaths',
'wbrck'=>'Winners bracket',
'poff_final'=>'Final',
'lbrck'=>'Loosers bracket',
'server'=>'Server',
'all_matches_err'=>'No matches.',
'seasons'=>'Seasons',
'signup'=>'sign up',
'players_limit'=>'Players limit',
'usr_clans'=>'User\'s teams',
'maps_limit'=>'Maps limit',
'season'=>'SEASON',
'no_players_stats'=>'There aren\'t any added players stats yet.',
'signup_limit'=>'Sign up limit',
'teams'=>'teams',
'win'=>'victory',
'defeat'=>'defeat',
'draw'=>'draw',
'no_awards'=>'There aren\'t any awards yet.',
'in_league'=>'In league',
'clan_squad_inf'=>'* means that player is signed up for current league.',
'clan_squad_inf2'=>'If you can\'t change player\'s information it means that he/she is signed up in some league, where squad change is disabled.',
#################
#new translations for 1.4
#################
'leagues'=>'Leagues',
'players_limit_invit_err1'=>'You can\'t add any player, because you reach players limit already.',
'1_round'=>'First Half',
'2_round'=>'Second Half',
'3_round'=>'Overtime',
'score_details'=>'Score details',
'1_round_short'=>'1st',
'2_round_short'=>'2nd',
'3_round_short'=>'O',
'skin'=>'Skin'
);

$admin_base = array(
'user_edit'=>'User edit',
'clan'=>'Team',
'subject'=>'Subject',
'visible'=>'Visible',
'news_list'=>'News list',
'previouse'=>'PREVIOUS',
'lnext'=>'NEXT',
'news_edit'=>'Edit news',
'news_err'=>'You must write the subject and content.',
'ban'=>'Ban',
'banned_ips'=>'Banned IP addresses',
'adrr_aban'=>'IP already banned.',
'answers'=>'Answers',
'pdur_time'=>'Duration (days)',
'poll_info'=>'Poll duration = 0 - no time limit.<br/>Answers separate with ; (example: <span class="italic">yes;no;dunno</span>)',
'poll_ntl'=>'Poll hasn\'t got a time limit.',
'back'=>'BACK',
'grants'=>'Grants',
'acc_err'=>'User doesn\'t exist.',
'no_result'=>'Nothing found.',
'userid'=>'User\'s ID',
'userlog'=>'User\'s Login',
'suser_edit'=>'EDIT USER',
'news_com'=>'News comment',
'options'=>'OPTIONS',
'bans'=>'BANS',
'matches'=>'MATCHES',
'rem'=>'REMOVE',
'portal_function'=>'Grants on portal',
'section_crew'=>'Section crew',
'all_flags'=>'List of all flags',
'name_err'=>'You have to at least write a name.',
'position'=>'Position',
'usr_grants'=>'GRANTS',
'article'=>'Article',
'art_list'=>'Article list',
'img_upl'=>'Image upload',
'img_add'=>'File added.',
'pics'=>'PICTURES',
'img_err'=>'You can only add jpg and gif files.',
'new_poll'=>'New poll',
'edit_poll'=>'Poll edit',
'poll_list'=>'Poll list',
'poll_err1'=>'You have to write at least two answers.',
'old_answers_rem'=>'Old answers removed.',
'poll_fsd'=>'Poll has already finished.',
'to_approve'=>'to approve',
'user'=>'User',
'webmaster'=>'Webmaster',
'info_add'=>'Information added',
'info_rem'=>'Information removed',
'qinfo_rem'=>'Do you really want to delete this',
'file_missing'=>'Missing file',
'remove_err'=>'Problem with removing'
);

$admin_leagues = array(
'cl'=>'CL',
'cl_edit'=>'CL edit',
'new_clan'=>'New team',
'new_season'=>'New season',
'season_edit'=>'Season edit',
'season_edit'=>'Season edit',
'clan_move'=>'moved to group',
'clan_ngrp'=>'now will be <span class="bold">without group</span>.',
'clan_agrp'=>'added to group',
'new_match'=>'New match',
'match_err1'=>'Choose two different teams.',
'tab_upd1'=>'Table for the first team updated.<br/>',
'tab_upd2'=>'Table for the second team updated.<br/>',
'match_saved1'=>'Information about first team\'s old match erased.<br/>',
'match_saved2'=>'Information about second team\'s old match erased.<br/>',
'screen'=>'Screenshot',
'screens'=>'Screenshots',
'screen_err1'=>'You must write which map.',
'screen_err2'=>'You can upload only JPG files.',
'screen_edit'=>'Edit screenshot',
'demo_err1'=>'You must write whose pov.',
'demo_err2'=>'You can upload only ZIP files.',
'demo'=>'Demo',
'demo_edit'=>'Demo edit',
'old_file'=>'old file',
'info_saved'=>'Info saved.',
'demos_list'=>'Demo list',
'screen_list'=>'Screenshot list',
'match_edit'=>'Edit match',
'group_err'=>'There aren\'t any active teams in this group.',
'group'=>'group',
'qnew_season'=>'DO you really want to add a new season',
'qdel_clan'=>'Do you really want to delete this team',
'active'=>'active',
'clan_edit'=>'Team edit',
'clan_list'=>'Team list',
'grants_info'=>'<blockquote>0 - delete admin<br/>1 - match edit, interviews<br/>2 - admin<br/>3 - head admin</blockquote>',
'groups'=>'GROUPS',
'gphase'=>'Group phase',
'gphases'=>'Group phases',
'new_group'=>'New group',
'edit_group'=>'Group edit',
'list_group'=>'Group list',
'no_grps'=>'no groups (change season info)',
'tables_round'=>'Rounds table',
'grp_err1'=>'no active teams',
'grp_err2'=>'No groups for this round.',
'other_match'=>'OTHER',
'playoff'=>'PLAY-OFFS',
'group_shrt'=>'GR',
'type'=>'Type',
'match_err2'=>'Chosen match doesn\'t exist.',
'dscr_edit'=>'DESCRIPTION',
'scrs_edit'=>'SCORE',
'ds_idd'=>'demo\'s ds ID',
'dscr_view'=>'Description preview',
'cant_edit'=>'can\'t edit',
'penalty'=>'Penalty',
'penalties'=>'Penalties',
'penalty_err'=>'This team isn\'t in the chosen group.',
'table'=>'Table',
'penalties'=>'Penalties',
'clan_err'=>'Chosen team played at least one match in the previous seasons, you can\'t delete it.',
'del_matchb'=>'First delete all team\'s matches in this table.',
'del_matchb2'=>'First delete all team\'s penalties in this table.',
'time'=>'Time',
'pl_stat'=>'Players stats',
'add_schedule1'=>'Matches added to schedule.',
'add_schedule2'=>'Chosen matches don\'t meet the schedule adding conditions.',
'scr_moveerr'=>'Problem with moving file from the temporary directory.',
'scr_delerr'=>'Problem with deleting the screenshot.',
'match_err3'=>'You can only add points from range -125:125.',
'interviews'=>'Articles',
'interview'=>'Interviews',
'interv_err1'=>'You can\'t edit this interview (you aren\'t the author or your grants are too low).',
'scr_remerr'=>'Problem with removing the file.',
'scr_remerr2'=>'Select screenshot(s) first.',
'league'=>'LEAGUE',
'new'=>'NEW',
'match_list'=>'Match list',
'group_delerr'=>'You can\'t remove a group in which there are teams.',
'fix'=>'FIX',
'tabl_fixed'=>'Table fixed.',
'table_fix'=>'Table fixer',
'match_rem'=>'Matches will be also removed.',
'sclan_del'=>'This team\'s matches from the chosen season are deleted.',
'ply_stats'=>'PLAYERS STATS',
'penstax'=>'Penalty standards',
'pensta'=>'Penalties standards',
'pen_exist'=>'Such penalty standard already exist',
'config'=>'Configuration',
'signup'=>'Sign ups',
'enable'=>'Turned ON',
'disable'=>'Turned OFF',
'hidden'=>'Hidden',
'lg_name'=>'League name',
'max_players'=>'Players limit',
'lg_irc'=>'League channel',
'def_country'=>'Default country',
'config_sav'=>'Configuration saved.',
'player_search'=>'Players search',
'link'=>'Link',
'demo_rem'=>'Demo file removed.',
'demo_rem_err'=>'Problem with removing the demo.',
'max_matches'=>'Matches limit',
'walkovers'=>'Penalty type',
'single'=>'single',
'summ'=>'summarize',
'clear_sign'=>'CLEAR SIGN UPS',
'sign_cleared'=>'Sign ups cleared.',
'user_clans'=>'User teams',
'block_ident'=>'Unique IDENT',
'wildcard'=>'Wildcard',
'clans_wild'=>'Team\'s wildcards',
'manage'=>'MANAGE',
'match_new'=>'New match',
'new_demo'=>'New demo',
'edit_demo'=>'Demo edit',
'edit_clan'=>'Edit team',
'edit_interview'=>'Edit interview',
'new_interview'=>'New interview',
'maps'=>'Maps',
'edit_group'=>'Edit group',
'new_group'=>'New group',
'preview'=>'preview',
'new_screen'=>'New screenshot',
'new_penalty'=>'New penalty',
'adm_guide'=>'Admin\'s Guide',
'round_for_all'=>'Round for all matches',
'poff_table'=>'Playoff table',
'ptable_err'=>'You can\'t remove a playoff table in which there are already some matches.',
'rdesc'=>'Round description',
'rdesc_add_full'=>' (for all matches in written round and for automatically chosen group phase)',
'dround_all'=>'Same description for all groups<br/>in that round and group phase?',
'user_id'=>'User ID',
'id_missing'=>'User with such an ID doesn\'t exist.',
'login_missing'=>'User with such a login doesn\'t exist.',
'add_player'=>'add player',
'players'=>'Players',
'player_added'=>'Player added.',
'mailer'=>'Mailer',
'receivers'=>'Receivers',
'mailer_err'=>'An Error occured while sending mail to: ',
'mailer_sent'=>'Messages sent.',
'auto_schedule'=>'Automatic scheduler',
'auto'=>'Automatic',
'manual'=>'Manual',
'settings'=>'Settings',
'rounds'=>'Rounds',
'match_per_round'=>'Matches per round',
'break'=>'break',
'already_played_max'=>'can\'t add match (already added maximum number of times)',
'added'=>'added',
'signup_dlimit'=>'Sign ups end',
'signup_tlimit'=>'Teams limit for sign up\'s',
'award'=>'award',
'award_list'=>'Award list',
'award_err1'=>'You have to write the award\'s name first.',
'award_new'=>'New award',
'award_edit'=>'Edit award',
'clan_awards'=>'Team\'s awards',
'award'=>'Award',
'award_err2'=>'Add some awards first.',
'teams_err1'=>'Add some teams first.',
'award2_qdel'=>'Do you really want to delete this team\'s award',
'no_players'=>'If you want to add player\'s stats add a player first.',
'standard'=>'standard',
'full'=>'full',
'teams_no'=>'Number of teams',
'fadd_ptable'=>'Add <a href="'.$_SERVER['PHP_SELF'].'?op=ptable">PLAY-OFF TABLE</a> first.',
'best_place'=>'Best place',
'doubleEl'=>'double elimintations',
'groups_req'=>'Add groups first.',
'admin_faq'=>'ADMIN\'S FAQ',
'cl_error1'=>'User is this team\'s leader already.',
'signup_inf1'=>'* means that team is already in this league.',
'signup_inf2'=>'Choosen teams were removed from sign ups.',
'signup_inf3'=>'Choosen teams were added to this league.',
'league_in'=>'IN LEAGUE',
'inleague_inf1'=>'Choosen teams were removed from this league.',
#################
#new translations for 1.4
#################
'map_list'=>'MAPS LIST',
'server_address'=>'Address',
'main_id'=>'Main ID',
'wars_id'=>'Wars ID',
'roster_id'=>'Roster ID',
'article_id'=>'Article ID',
'league_type'=>'League type',
'new_item'=>'add new item',
'fname'=>'Full name',
'player_type'=>'Player type',
'player_strict_link'=>'strictly linked with teams',
'player_free_link'=>'not linked with teams',
'forum_type'=>'Forum type',
'forum_prefix'=>'Forum prefix',
'forum_link'=>'Forum address',
'forum_head'=>'Forum',
'no_flags'=>'Display flags',
'display_head'=>'Display',
'poll_live_time'=>'Poll display time',
'poll_live_time_title'=>'Number of days, which poll will be shown after it will be finished.',
'news_limit_show'=>'News per page',
'short_latest_news'=>'Number of "latest news"',
'short_latest_matches'=>'Number of "latest matches"',
'score_type'=>'Match score depend on',
'score_maps'=>'maps result',
'score_rounds'=>'rounds score',
'user_news'=>'User\'s news',
'league_address'=>'League address',
'irc_server'=>'League IRC server',
'dispute_limit_before'=>'Dispute limit before date',
'dispute_limit_after'=>'Dispute limit after date',
'menu_decoration'=>'Menu decoration',
'group_decoration'=>'Group decoration',
'check_uncheck_all'=>'Check/Uncheck All',
'menu_item'=>'Menu Item',
'menu_builder'=>'MENU BUILDER',
'same_window'=>'same',
'new_window'=>'new',
'target'=>'Target window',
'menu_col'=>'Column',
'menu_row'=>'Row',
'head_lang'=>'Language reference',
'privilages_local'=>'League privilages',
'privilages_global'=>'Global privilages',
'date_from'=>'Date range from',
'date_to'=>'Date range to',
'points_standards'=>'Points standards',
'points_standard'=>'Points standard',
'prule_score1'=>'Wins team 1',
'prule_score2'=>'Wins team 2',
'prule_points1'=>'Points team 1',
'prule_points2'=>'Points team 2',
'draws'=>'Draws',
'local_link'=>'Local link',
'server_list'=>'SERVERS LIST',
'specialtab_item'=>'Table item'
);

$duels = array(
'clans'=>'Players',
'clan_info'=>'Player Info',
'clan_err'=>'Such player doesn\'t exist.',
'edit_cinfo'=>'Player info edit',
'cls_stats'=>'Player stats',
'sign_inf2'=>'Player added',
'sign_err'=>'Such player is already registered.',
'new_clan'=>'New player',
'new_clan_err'=>'Such player already exists.',
'clan_add'=>'Player added.',
'clan'=>'Player',
'sign_inf2'=>'Player signed up.',
#################
#updated translations for 1.4
#################
'rem_player'=>'remove player'
);

$duels_admin = array(
'signup_inf1'=>'* means that player is already in this league.',
'signup_inf2'=>'Choosen players were removed from sign ups.',
'signup_inf3'=>'Choosen players were added to this league.',
#################
#new translations for 1.4
#################
'clan_awards'=>'Player\'s awards'
);

$lang = array_merge($base,$leagues);
if(LEAGUE_TYPE=='D') $lang = array_merge($lang,$duels);
$alang = array_merge($lang,$admin_base,$admin_leagues);
if(LEAGUE_TYPE=='D') $alang = array_merge($alang,$duels_admin);

$countries = array(
1=>'Albania',
2=>'Argentina',
3=>'Australia',
4=>'Austria',
5=>'Belarus',
6=>'Belgium',
7=>'Bosnia-Herzegovina',
8=>'Brazil',
9=>'Bulgaria',
10=>'Canada',
11=>'Chile',
12=>'China',
13=>'Colombia',
14=>'Croatia',
15=>'Czech Republic',
16=>'Denmark',
17=>'Estonia',
18=>'Finland',
19=>'France',
20=>'Germany',
21=>'Greece',
22=>'Hungary',
23=>'Ireland',
24=>'Italy',
25=>'Japan',
26=>'Latvia',
27=>'Lithuania',
28=>'Luxembourg',
29=>'Macedonia',
55=>'Malta',
30=>'Mexico',
31=>'Moldova',
32=>'Netherlands',
33=>'New Zealand',
34=>'Nigeria',
35=>'Norway',
36=>'Poland',
37=>'Portugal',
38=>'Romania',
39=>'Russia',
53=>'Serbia',
40=>'Slovakia',
41=>'Slovenia',
42=>'Spain',
43=>'Sweden',
44=>'Switzerland',
45=>'Turkey',
47=>'Ukraine',
48=>'United Kingdom',
49=>'Uruguay',
46=>'USA',
50=>'Yugoslavia',
54=>'Scandinavia',
51=>'European Union',
52=>'Other');

foreach($countries as $ky=>$vl) $countries2[$vl] = $ky;

?>
