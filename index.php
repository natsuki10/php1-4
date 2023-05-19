<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけんゲーム</title>
</head>
<body>
    <form method="post">
        <label for="player_hand">
            <select name="player_hand" id="player_hand">
                <option value="rock">グー</option>
                <option value="scissors">チョキ</option>
                <option value="paper">パー</option>
            </select><br>
        </label>
        <input type="submit" name="submit" value="じゃんけん！">
    </form>
    <?php
    $hands = array('rock' => 'rock', 'scissors' => 'scissors', 'paper' => 'paper');
    $pc_hand = $hands[array_rand($hands)];

    if(isset($_POST['submit'])) {
        $player_hand = $_POST['player_hand'];

        switch($player_hand) {
            case 'rock':
                if($pc_hand === $hands['scissors']) {
                    $result = '勝ち';   
                } elseif ($pc_hand === $hands['paper']) {
					$result = '負け';
				} else {
					$result = 'あいこ';
				}
				break;
            case 'scissors':
                if ($pc_hand === $hands['paper']) {
                    $result = '勝ち';
                } elseif ($pc_hand === $hands['rock']) {
                    $result = '負け';
                } else {
                    $result = 'あいこ';
                 }
                break;
            case 'paper':
                if ($pc_hand === $hands['rock']) {
                    $result = '勝ち';
                } elseif ($pc_hand === $hands['scissors']) {
                    $result = '負け';
                } else {
                    $result = 'あいこ';
                }
                break;
            default:
				$result = '';
			    break;     
        }
        echo '<p>自分：';
            switch ($player_hand) {
                case 'rock':
                    echo 'グー';
                    break;
                case 'scissors':
                    echo 'チョキ';
                    break;
                case 'paper':
                    echo 'パー';
                    break;
        }
        echo '</p>';
        echo '<p>相手：';
            switch ($pc_hand) {
                case 'rock':
                    echo 'グー';
                    break;
                case 'scissors':
                    echo 'チョキ';
                    break;
                case 'paper':
                    echo 'パー';
                    break;
            }
        echo '</p>';
        switch ($result) {
            case '勝ち':
                echo 'あなたの勝利です！';
                break;
            case 'あいこ':
                echo 'あいこ';
                break;
            case '負け':
                echo 'あなたの敗北です。。。';
                break;
        };
    }
    ?>
</body>
</html>