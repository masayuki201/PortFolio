# Children's Videos　　通称:「ちるび」

### お子様向けのYouTube動画の共有サイトです。

### 同世代のお子様が見ているYouTube動画を共有できます。

<br>

![スクリーンショット 2021-05-03 9 22 48](https://user-images.githubusercontent.com/74889837/116832806-43545380-abf1-11eb-8330-895c742134a7.png)


<br>

# URL
### https://childrens-videos.net

### ログインされますと、動画登録ができます。

### ゲストログイン メールアドレス:g@g.com

### ゲストログイン パスワード:123

<br>

# 利用方法

### <全ての方対象>

登録動画の一覧ページや、ピックアップ動画ページ、再生回数ランキングページに移動して頂き、見たい動画を再生させることが出来ます。

<br>

### <ログイン/新規登録済みの方のみ対象>

動画登録ページより、お気に入りのYouTube動画のURL（URL下11ケタ）を添付及び、その動画の対象学年を選択し、登録することが出来ます。

登録された動画は、登録動画の一覧ページや、ピックアップ動画ページ、再生回数ランキングページに反映されます。

動画登録ページより、登録動画の削除が出来ます。

マイページより、登録時のニックネーム、メールアドレスの変更、又は、退会することが出来ます。

<br>

# 目指した課題解決

子供にYouTube動画などのを見せるのが当たり前になったこの時代。親としては、できれば見て欲しくない動画があったり、同世代の子供がどんな動画を見ているのか気になったりします。

この課題を解決することを、目指して作成しました。

<br>

# 洗い出した要件定義
|  機能              |  目的                        |  詳細                                               |  ストーリー（ユースケース）                                                                   |
--------------------|------------------------------|----------------------------------------------------|-------------------------------------------------------------------------------------------|
|  DB設計            |  アプリ作成の全体像を把握する。必要テーブルを洗い出す。  |  必要テーブル users/videos/targets                                                                                            |
|  ログイン・新規登録機能    |  ユーザー情報の管理機能         |  ヘッダーの右上に、ログイン・新規登録ボタンを表示させる。ログイン時は、ヘッダーの右上にニックネーム、ヘッダーの右側にマイページ、ログアウトボタンを表示させる。user_tableの情報と比較し、ログイン・新規登録をする  |  動画を登録するには、ユーザーは、ログイン又は、新規登録が必要である。  |
|  ユーザー情報表示・修正・退会機能 |  ユーザー情報の確認・修正・退会機能   |  ログイン時は、ヘッダーの右側にマイページボタンを表示させる。user_tableの情報を表示、修正、削除する  |  マイページより、ユーザーの、ニックネーム、メールアドレスを表示確認することができる。修正・退会したい場合は、修正/退会ボタンより、登録情報修正ページに移り、修正・退会をすることができる。  |
|  登録動画一覧機能    |  登録動画を一覧に表示し、見たい動画を選択、再生させる  |  ヘッダー・フッターのみんなの動画ボタンより、動画一覧ページへ移り、全登録動画（videos_tableに登録されている動画）を表示させる。その際、登録者のニックネーム、おすすめの対象学年を付属させ表示させる。  |  全登録動画より見たい動画を選択し、再生することができる。 おすすめの対象学年を参考にすることもできる。  |
|  ピックアップ機能    |  登録動画より、ランダムに9動画ピックアップさせる  |  ヘッダー・フッターのピックアップボタンより、ピックアップページへ移り、全登録動画（videos_tableに登録されている動画）からランダムに選択された9動画を表示させる。その際、登録者のニックネーム、おすすめの対象学年を付属させ表示させる。  |  ピックアップ動画を選択し、再生することができる。ユーザーは、全動画から選ばずとも、自動で9動画を選択されるので、その中から選択、再生することができる。ページが更新されるたびに、ピックアップ動画は毎回変わる。  |
|  ランキング機能      |  全登録動画のYouTubeの再生回数を表示させ、再生回数の多い順に並び替える  |  ヘッダー・フッターのランキングボタンより、ランキングページへ移り、全登録動画（videos_tableに登録されている動画）にYouTube上での再生回数をAPIを使用し取得・表示させ、その再生回数の多い順に並び替えをする。その際、登録者のニックネーム、おすすめの対象学年を付属させ表示させる。   |  ユーザー自身で、登録動画を再生回数の多い順に並び替えずとも、自動で並び替えられた動画を見ることができる。  |
|  動画登録           |  お気に入りや、共有したいYouTube動画を、おすすめしたい対象学年を選択し、アプリに登録させる  |  ヘッダー・フッターの動画登録ボタンより、動画登録ページへ移り、共有したいYouTube動画のURL（下11ケタ）を記入、おすすめしたい対象学年（target_grade）を選択し、登録する。ログインしていない時や、新規登録していない場合は、ログイン・新規登録を行ってから、動画登録ページへ移る様に設定する。  |  ユーザーは、共有したいYouTube動画のURL（下11ケタ）を記入し、おすすめしたい対象学年を選択後、動画を登録し、共有することができる。  |
|  対象学年登録機能    |  自分の登録動画に、おすすめの対象学年を付属させ、動画登録をする  |  動画動画ページにて、動画を登録する際に、おすすめしたい対象学年（target_grade）を選択し、アプリに登録させる  |  ユーザーは、動画登録時に、登録する動画のおすすめにしたい対象学年を登録することができる。  |
|  登録動画の削除     |  自分で登録した動画の削除ができる  |  ヘッダー・フッターの動画登録ボタンより、動画登録ページへ移り、下段の登録済み動画のエリアで、自分で登録した動画の削除（videos_tableから削除）ができる。  |   ユーザーは、自分で登録した動画の一覧が分かり、登録動画の削除もすることができる。  |
|  検索機能（実装中）  |  おすすめの対象学年を選択し、登録動画一覧から検索、表示させる  |  ヘッダー・フッターのみんなの動画ボタンより、動画一覧ページへ移る。検索機能エリアで、対象学年（target_grade）を選択し、検索ボタンを押すと、選択した対象学年の動画のみ表示させる  |  ユーザーは、全登録動画より、選択した対象学年の動画のみ表示させ、見ることができる。  |


<br>

# 機能一覧
- 新規登録、ログイン機能
- ピックアップ機能 （下記gif参照）
- ランキング機能 （下記gif参照）
- 動画一覧機能
- 動画登録・削除機能

  - 対象学年選択

- ユーザー情報表示

  - 情報修正・退会機能


### ピックアップ機能
![ピックアップ](https://user-images.githubusercontent.com/74889837/116943587-d99a7f00-acae-11eb-9644-701a2cd143c6.gif)

### ランキング機能
![ランキング](https://user-images.githubusercontent.com/74889837/116945106-d9e84980-acb1-11eb-82e4-99952eb139d1.gif)

### 動画一覧機能
![動画一覧機能](https://user-images.githubusercontent.com/74889837/116945579-005ab480-acb3-11eb-9886-6b84d659939a.gif)

### 動画登録・削除機能
![動画登録・削除機能](https://user-images.githubusercontent.com/74889837/116946060-26cd1f80-acb4-11eb-8cf4-87db30590cab.gif)



# 今後の実装予定機能
- 検索機能
- ランキングの順位表示
- 管理者機能（RESTful API）
- YuTube動画タイトル表示（YouTube API）
- レスポンシブ化　など







<br>

# データベース設計

<br>

![image](https://user-images.githubusercontent.com/74889837/115138728-d2496380-a068-11eb-937e-ecf4bdd0f783.png)


<br>

# 使用技術

- php 7.3.11

- Laravel 5.8.38

- MySQL 5.7.33

- AWS


  - VPC
  - EC2
  - RDS
  - Route53

- Docker/Docker-compose

- YouTube Data API

<br>

![image](https://user-images.githubusercontent.com/74889837/115611280-d5707800-a324-11eb-91b5-83280944ad78.png)
