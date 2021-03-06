# でかブックマーク

まずはこちらをチェック: 
### [公開場所](https://ketcha.xyz/extensions/he2/view/)


# 特徴
JSONの投稿により、あなた専用のブックマーク画面を生成します。
ブラウザ標準のブックマークは大量の保存に耐えますが、その分クリック領域が狭く簡単に押せません。でかブックマークはその逆を行く存在です。
少ない数のあなたの頻用ページを、大きなボタンで表示します。


# 使い方
## 全体像
- [**Top Page**](https://ketcha.xyz/extensions/he2/view/) `view/` 
- 個別のブックマークページ `hej/?src="......"`

の2つがあります。

**Top Page** にて、`default.json`をダウンロードします。これをご自身のPC上で編集し、再び **Top Page**にアップロードします。
するとそのファイルが表に追加され、`Go`からあなた専用のブックマーク画面が利用可能になります。

## JSONの書き方
JSONファイルを編集する際は[VScode](https://azure.microsoft.com/ja-jp/products/visual-studio-code/) のような構文チェック機能付きテキストエディターの仕様することを強く推奨します。
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
|キー|説明|
|----|----|
| `title` | この値がブックマークページの一番上に表示されます。 |
| `contents` | この値は含まれるのはオブジェトの配列で、オブジェクトひとつあたりに一つの段落が生成されます。  |
| `cat_name` | カテゴリーの名前。 |
| `contents` | この値は含まれるのはオブジェトの配列で、オブジェクトひとつあたりに一つのボタンが生成されます。  |

ボタンの中の値
|キー|説明|
|----|----|
| `name` | ブックマーク先の名前 |
| `link` | ブックマーク先のURL |
| `color` | ブックマークボタンの背景色。`#eea60c`のような16進数のRGB、または[htmlのカラー名](https://www.colordic.org/) が利用できます。|
# ワンタッチでアクセス
ブラウザのホームボタンに登録すると、1クリックまたはAlt+Homeでアクセスできて大変便利です。  

