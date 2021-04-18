# でかブックマーク

まずはこちらをチェック: 
### [公開場所](https://ketcha.xyz/extensions/he2/view/)


# 特徴
JSONの投稿により、あなた専用のブックマーク画面を生成します。
ブラウザ標準のブックマークは大量の保存に耐えますが、その分クリック領域が狭く簡単に押せません。でかブックマークはその逆を行く存在です。
少ない数のあなたの頻用ページを、大きなボタンで表示します。


# 使い方
## 全体像
**Top Page** にて、`default.json`をダウンロードします。これをご自身のPC上で編集し、再び **Top Page**にアップロードします。
するとそのファイルが表に追加され、`Go`からあなた専用のブックマーク画面が利用可能になります。

## JSONの書き方

```
{
    "title": "Default",
    "contents": [
        {
            "cat_name": "Media",
            "subjects": [
                {
                    "name": "YouTube",
                    "link": "https://www.youtube.com/",
                    "color": "#FF0000"
                },
                {
                    "name": "NetFlix",
                    "link": "https://www.netflix.com/browse",
                    "color": "#E50914"
                }
            ]
        },
        {
          ......
        }
    ]
}
```

# ワンタッチでアクセス
ブラウザのホームボタンに登録すると、1クリックまたはAlt+Homeでアクセスできて大変便利です。  

## アップロード
`default.json`をダウンロードし、自分好みに書き換えてアップロードして使ってください。JSONの書き方は`default.json`をよく見て察して下さい。VScodeなどの構文チェック機能付きテキストエディターの仕様を強く推奨します。

