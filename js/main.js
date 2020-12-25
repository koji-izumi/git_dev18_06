// 有馬記念の出走馬を枠順とセットでオブジェクトに格納
const horse = [
    { num: "①", name: "バビット" },
    { num: "②", name: "ブラストワンピース" },
    { num: "③", name: "クレッシェンドラヴ" },
    { num: "④", name: "ラヴズオンリーユー" },
    { num: "⑤", name: "ワールドプレミア" },
    { num: "⑥", name: "キセキ" },
    { num: "⑦", name: "ラッキーライラック" },
    { num: "⑧", name: "ペルシアンナイト" },
    { num: "⑨", name: "クロノジェネシス" },
    { num: "⑩", name: "カレンブーケドール" },
    { num: "⑪", name: "モズベッロ" },
    { num: "⑫", name: "オーソリティ" },
    { num: "⑬", name: "フィエールマン" },
    { num: "⑭", name: "サラキア" },
    { num: "⑮", name: "オセアグレイト" },
    { num: "⑯", name: "ユーキャンスマイル" }
];

// トップページに投票用のラジオボタンを挿入
for (let i = 0; i < 16; i++) {
    const horseHtml = `<label><input type="radio" name="horse" value="${horse[i].name}">${horse[i].num}${horse[i].name}</label>`
    $(".horse").append(horseHtml);
}

// chart.jsでの読み込み用の関数
function horseInfo() {
    return horse;
}