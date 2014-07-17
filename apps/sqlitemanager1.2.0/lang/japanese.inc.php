<?php
/**
* Web based SQLite management
* @package SQLiteManager
* @version $Id: japanese.inc.php,v 1.35 2006/04/14 15:16:52 freddy78 Exp $ $Revision: 1.35 $
*/
/*
 Translated by Rui Hirokawa <hirokawa at php dot net>
 */
$charset = 'euc-jp';
$langSuffix = 'ja-euc';
/**
* Fichier d'internationnalisation
*/
$itemTranslated = array(	"Table"		=> "テーブル", 
										"View"		=> "ビュー",
										"Trigger"	=> "トリガー",
										"Function"	=> "関数");
										
$langueTranslated = array(	1=>"フランス語", 2=>"英語", 3=>"ポーランド語", 
							4=>"ドイツ語", 5=>"日本語", 6=>"イタリア語", 
							7=>"クロアチア語", 8=>"ブラジル ポルトガル語", 9=>"オランダ語", 
							10=>"スペイン語", 11=>"Danish", 12=>"Chinese traditional", 
              				13=>"Chinese simplified");

$themeTranslated = array("default"=>"デフォルト",  "PMA"=>"PMA", "jall"=>"JALL", "green"=>"Green");

$TEXT[1]	=	"ホーム";
$TEXT[2]	=	"<a href=\"http://www.sqlitemanager.org\" target=\"_blank\">SQLiteManager</a>へようこそ バージョン ";
$TEXT[3]	=	"SQLite バージョン";
$TEXT[4]	=	"SQLite ドキュメント";
$TEXT[5]	=	"SQL 言語";
$TEXT[6]	=	"SQLite拡張モジュールをロードできません。";
$TEXT[7]	=	"'SQLite' 設定用データベースをオープンできません。<br>エラーメッセージ";
$TEXT[8]	=	"設定用データベースへの書き込み権限がありません!";
$TEXT[9]	=	"エラー";
$TEXT[10]	=	"関数";
$TEXT[11]	=	"集約";
$TEXT[12]	=	"Final 関数";
$TEXT[13]	=	"引数の数";
$TEXT[14]	=	"修正";
$TEXT[15]	=	"削除";
$TEXT[16]	=	"新規関数プロパティ";
$TEXT[17]	=	"関数プロパティ";
$TEXT[18]	=	"エラー : 全てのフィールドに入力する必要があります.";
$TEXT[19]	=	"名前";
$TEXT[20]	=	"型";
$TEXT[21]	=	"step プロパティ";
$TEXT[22]	=	"final プロパティ";
$TEXT[23]	=	"引数の数";
$TEXT[24]	=	"この関数を全てのデータベースで使用する.";
$TEXT[25]	=	"新しいテーブルプロパティ";
$TEXT[26]	=	"テーブルプロパティ";
$TEXT[27]	=	"フィールド";
$TEXT[28]	=	"型";
$TEXT[29]	=	"長さ";
$TEXT[30]	=	"ヌル";
$TEXT[31]	=	"デフォルト";
$TEXT[32]	=	"プライマリ";
$TEXT[33]	=	"アクション";
$TEXT[34]	=	"全てチェック";
$TEXT[35]	=	"チェックを全て外す";
$TEXT[36]	=	"選択済みのものを";
$TEXT[37]	=	"本当にこのフィールドを削除しても良いですか?";
$TEXT[38]	=	"インデックスの管理";
$TEXT[39]	=	"本当にこのフィールドを削除しても良いですか";
$TEXT[40]	=	"はい";
$TEXT[41]	=	"いいえ";
$TEXT[42]	=	"プライマリ";
$TEXT[43]	=	" ";
$TEXT[44]	=	"個のフィールドを追加 ";
$TEXT[45]	=	"テーブルの末尾に";
$TEXT[46]	=	"テーブルの先頭に";
$TEXT[47]	=	"次のフィールドの後：";
$TEXT[48]	=	"新規レコードを挿入";
$TEXT[49]	=	"レコードを修正";
$TEXT[50]	=	"値";
$TEXT[51]	=	"保存";
$TEXT[52]	=	"ファイルからデータを挿入";
$TEXT[53]	=	"トリガー";
$TEXT[54]	=	"新規トリガープロパティ";
$TEXT[55]	=	"トリガー プロパティ";
$TEXT[56]	=	"タイミング";
$TEXT[57]	=	"イベント";
$TEXT[58]	=	"オン";
$TEXT[59]	=	"条件";
$TEXT[60]	=	"手順";
$TEXT[61]	=	"プロパティ";
$TEXT[62]	=	"新しいビュープロパティ";
$TEXT[63]	=	"ビュープロパティ";
$TEXT[64]	=	"クエリは実行されませんでした!";
$TEXT[65]	=	"不正な接続リソースです!";
$TEXT[66]	=	"一つまたは複数のリクエストを実行";
$TEXT[67]	=	"<i>または</i> SQLファイルから実行: ";
$TEXT[68]	=	"クエリ形式 : 標準 (sqlite)";
$TEXT[69]	=	"実行";
$TEXT[70]	=	"クエリが実行されました.";
$TEXT[71]	=	"行が修正されました.";
$TEXT[72]	=	"構造";
$TEXT[73]	=	"表示";
$TEXT[74]	=	"SQL";
$TEXT[75]	=	"挿入";
$TEXT[76]	=	"エクスポート";
$TEXT[77]	=	"空";
$TEXT[78]	=	"本当にこの関数を消去してもよろしいですか?";
$TEXT[79]	=	"本当にこのテーブルを空にしてもよろしいですか?";
$TEXT[80]	=	"本当にこのテーブルを削除してもよろしいですか?";
$TEXT[81]	=	"追加";
$TEXT[82]	=	"本当にこのビューを削除してもよろしいですか?";
$TEXT[83]	=	"本当にこのトリガーを削除してもよろしいですか?";
$TEXT[84]	=	"オプション";
$TEXT[85]	=	"本当にこのデータベースを削除してもよろしいですか? この削除処理では登録が解除されるだけで、データベースが破棄されるわけではありません。 ";
$TEXT[86]	=	"削除";
$TEXT[87]	=	"新しいビューを追加";
$TEXT[88]	=	"新しいトリガーを追加";
$TEXT[89]	=	"新しい関数を追加";
$TEXT[90]	=	"SQLクエリ";
$TEXT[91]	=	"キーの名前";
$TEXT[92]	=	"このインデックスを本当に削除しますか";
$TEXT[93]	=	"インデックスを追加: ";
$TEXT[94]	=	"カラム";
$TEXT[95]	=	"無視する";
$TEXT[96]	=	"キーを指定して追加: ";
$TEXT[97]	=	"このクエリに名前を指定してビューを追加: ";
$TEXT[98]	=	" ";
$TEXT[99]	=	"エラーを発生した行";
$TEXT[100]	=	"設定用データベースへの書き込み権限に明らかに問題があります";
$TEXT[101]	=	"このデータベースを作成または読み込めません";
$TEXT[102]	=	"全てのフィールドが入力されている必要があります!";
$TEXT[103]	=	"新しいデータベースを追加";
$TEXT[104]	=	"パス";
$TEXT[105]	=	"データ配列の要素数が固定されていません";
$TEXT[106]	=	"クラス 'Grid' のコンストラクタのパラメータは配列とする必要があります";
$TEXT[107]	=	"カラムの並びを表す配列の要素数が足りません。";
$TEXT[108]	=	"セルの並びは : 'left', 'right', 'center'のどれかである必要があります";
$TEXT[109]	=	"カラムの並びを指定するパラメータは配列である必要があります";
$TEXT[110]	=	"カラム形式を指定するパラメータは配列である必要があります";
$TEXT[111]	=	"カラムソート配列の要素数が間違っています";
$TEXT[112]	=	"ソートパラメータは 0=ソート無し, または 1=ソートとする必要があります。";
$TEXT[113]	=	"カラムソート用のパラメータは配列とする必要があります";
$TEXT[114]	=	"calculateカラムのフォーマット文字列が空です.";
$TEXT[115]	=	"calculateカラムの場合、タイトルは省略できません";
$TEXT[116]	=	"クラス'ArrayToGrid'のコンストラクタのパラメータは配列とする必要があります.";
$TEXT[117]	=	"レコード数を数えることができません";
$TEXT[118]	=	"レコード数";
$TEXT[119]	=	"挿入";
$TEXT[120]	=	"本当に削除してもよろしいですか";
$TEXT[121]	=	"the";
$TEXT[122]	=	"the";
$TEXT[123]	=	"本当にこのテーブルを空ににしてもよろしいですか";
$TEXT[124]	=	"構造のみ";
$TEXT[125]	=	"構造とデータ";
$TEXT[126]	=	"データーのみ";
$TEXT[127]	=	"挿入を完了する";
$TEXT[128]	=	"送信";
$TEXT[129]	=	"ホスト";
$TEXT[130]	=	"生成時間";
$TEXT[131]	=	"データベース";
$TEXT[132]	=	"テーブル用のテーブル構造体";
$TEXT[133]	=	"テーブルからデータをダンプする";
$TEXT[134]	=	"ビュー用のビュー構造体";
$TEXT[135]	=	"ユーザ定義関数のプロパティ";
$TEXT[136]	=	"レコード";
$TEXT[137]	=	"ファイル";
$TEXT[138]	=	"内容を置換";
$TEXT[139]	=	"区切り文字";
$TEXT[140]	=	"フォーマット済のテキストファイルからデータを挿入";
$TEXT[141]	=	"言語";
$TEXT[142]	=	"テーマ";
$TEXT[143]	=	"データベースをアップロード";
$TEXT[144]	=	"アップロード用フォルダーにアクセスできません.<br>('DEFAULT_DB_PATH' ファイル'include/user_defined.inc.php'の定数'DEFAULT_DB_PATH'を修正してください)";
$TEXT[145]	=	"SQLを解析する";
$TEXT[146]	=	"アタッチされたデータベースの管理";
$TEXT[147]	=	"アクセスが許可されていません。有効なログイン名とパスワードを入力する必要があります。";
$TEXT[148]	=	"ログイン名が無効です。";
$TEXT[149]	=	"パスワードがログイン名に対応していません。";
$TEXT[150]	=	"PHP バージョン";
$TEXT[151] = 	"保存後";
$TEXT[152] = 	"前のページに戻る";
$TEXT[153] = 	"別の新規レコードを挿入する";
$TEXT[154] = 	"設定用データベースが読込み専用になっています。<br/>SQLiteManagerのいくつかの機能は正しく動作しません。";
$TEXT[155] = 	"このデータベースは読込み専用です。";
$TEXT[156] = 	"権限"; 
$TEXT[157] = 	"パスワード変更"; 
$TEXT[158] = 	"ログオフ"; 
$TEXT[159] = 	"ユーザを追加"; 
$TEXT[160] = 	"グループを追加"; 
$TEXT[161] = 	"ユーザの概要"; 
$TEXT[162] = 	"グループの概要"; 
$TEXT[163] = 	"名前"; 
$TEXT[164] = 	"ログイン"; 
$TEXT[165] = 	"グループ"; 
$TEXT[166] = 	"SQL実行"; 
$TEXT[167] = 	"データ"; 
$TEXT[168] = 	"エクスポート"; 
$TEXT[169] = 	"空"; 
$TEXT[170] = 	"削除"; 
$TEXT[171] = 	"古いパスワードが正しくありません。"; 
$TEXT[172] = 	"パスワードと確認用入力が異なっています。"; 
$TEXT[173] = 	"パスワードが変更されました。"; 
$TEXT[174] = 	"再度ログインするにはここをクリックして下さい"; 
$TEXT[175] = 	"過去 :"; 
$TEXT[176] = 	"新規 :"; 
$TEXT[177] = 	"確認 :"; 
$TEXT[178] = 	"情報"; 
$TEXT[179] = 	"位置 :"; 
$TEXT[180] = 	"サイズ :"; 
$TEXT[181] = 	"権限 :"; 
$TEXT[182] = 	"最終更新 :"; 
$TEXT[183] = 	"インテグリティ確認"; 
$TEXT[184] = 	"バキューム"; 
$TEXT[185] = 	"デフォルトの同期 :"; 
$TEXT[186] = 	"デフォルトのキャッシュサイズ :"; 
$TEXT[187] = 	"オフ "; 
$TEXT[188] = 	"ノーマル "; 
$TEXT[189] = 	"フル "; 
$TEXT[190]	= 	"アクセス制御管理"; 
$TEXT[191]	= 	"はい"; 
$TEXT[192]	= 	"いいえ"; 
$TEXT[193]	= 	"デフォルトの一時記憶"; 
$TEXT[194]	= 	"デフォルト"; 
$TEXT[195]	= 	"メモリ"; 
$TEXT[196]	= 	"ファイル"; 
$TEXT[197]	= 	"ユニーク"; 
$TEXT[198]	= 	"インデックス"; 
$TEXT[199]	= 	"データ";
$TEXT[200]	= 	"適用";
$TEXT[201]	=	"選択";
$TEXT[202]	=	"演算子";
$TEXT[203]	=	"追加条件 :";
$TEXT[204]	=	"AND";
$TEXT[205]	=	"OR";
$TEXT[206]	=	"選択";
$TEXT[207]	=	"検索";
$TEXT[208]	=	"リネーム";
$TEXT[209]	=	"移動";
$TEXT[210]	=	"コピー";
$TEXT[211]	=	"プラグイン";
$TEXT[212]	=	"管理";
$TEXT[213]	=	"クエリ時間 :";
$TEXT[214]	=	"ミリ秒.";
$TEXT[215]	=	"変更後のテーブル名 :";
$TEXT[216]	=	"テーブルの移動先 (データベース.テーブル) :";
$TEXT[217]	=	"テーブルのコピー先 (データベース.テーブル) :";
$TEXT[218]	=	"DROP TABLEを追加";
$TEXT[219]	=	"新規レコードとして保存";
$TEXT[220]	=	"保存";
$TEXT[221]	=	"型を保存";
$TEXT[222]  =   "Operation";
$TEXT[223]  =   "Update";
$TEXT[224]  =   "Tip : You can use internal PHP functions in your queries !";
$TEXT[225]  =   "Truncated text";
$TEXT[226]  =   "Full text";
$TEXT[227]  =   "-- select --";
$TEXT[228]  =   "(s)";
$TEXT[229]  =   "Version";
$TEXT[230]  =   "(new database)";
$TEXT[231]  =   "Official SQliteManager Homepage";
$TEXT[232]  =   "The database can't be attain";
$TEXT[233]  =   "Trigger structure";
?>