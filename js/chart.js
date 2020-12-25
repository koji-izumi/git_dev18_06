// 出走馬をmain.jsから取得
let horseData = horseInfo();
let array = [];;
for (let i = 0; i < 16; i++) {
    array.push(horseData[i].name);
}

// vote.txtに入っているデータを馬名ごとにカウントし、代入
const voteData = {
    name: [],
    count: [],
};
for (let i = 0; i < Object.keys(js_data).length; i++) {
    voteData.name.push(Object.keys(js_data)[i].split("\n").join(''));
    voteData.count.push(Object.values(js_data)[i])
}

// 結果表示用のオブジェクトを用意
let voteResult = {
    name: array,
    count: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
}

// vote.txtのデータを順に取得し、結果表示用オブジェクトのindexを取得して値を変更
for (let j = 0; j < voteData.name.length; j++) {
    let voteName = voteData.name[j];
    let index = voteResult.name.indexOf(voteName);
    voteResult.count[index] = voteData.count[j];
}

// Chartの設定変更
let ctx = document.getElementById("myBarChart");
ctx.height = 100;

let myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: array,
        datasets: [
            {
                label: "得票数",
                data: voteResult.count,
                backgroundColor: "rgba(219,39,91,0.5)"
            }
        ]
    },
    options: {
        title: {
            display: false,
            text: "有馬記念 投票数"
        },
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMax: 20,
                    sugegstedMin: 0,
                    stepSize: 2
                }
            }]

        }
    }
})