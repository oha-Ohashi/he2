var obj = [
    {
        "cat_name": "univ",
        "subjects": [
            {
                "name": "potal",
                "link": "mimimi"
            },
            {
                "name": "potal",
                "link": "mimimi"
            }
        ]
    },
    {
        "cat_name": "univ",
        "subjects": [
            {
                "name": "potal",
                "link": "mimimi"
            },
            {
                "name": "potal",
                "link": "mimimi"
            }
        ]
    }
];

$(document).ready(function(){
    console.log("log log");
    console.log(sbjsn);

    //sbjsn.shift();
    $('#bkm_title').text(sbjsn.title);
    sbjsn.contents.forEach(e => {
        gen_cat(e);
    });
});

function gen_cat(obj){
    $('<h2>',{
        class: '',
        text: obj['cat_name']
    }).appendTo('#contArea');
    
    var row = $('<div>',{
        class: 'row',
    });

    obj['subjects'].forEach(e => {
        console.log(e);
        gen_row(
            e["name"], e["link"], e["color"]
        ).appendTo(row);
    });

    row.appendTo('#contArea');
}
function gen_row(name, ref, color){
    var elm = $('<div>',{
        class: 'subject col-lg-3 col-sm-4 col-6'
    });
    var sbjttl = $('<div>',{
        class: 'sbj_title d-flex align-items-center',
    });
    sbjttl.css('background-color', color);
    var sbj_a = $('<a>',{
        class: 'container',
        href: ref,
        text: name
    });
    sbj_a.appendTo(sbjttl);
    sbjttl.appendTo(elm);
    //elm.appendTo('#contArea')
    return elm;
}