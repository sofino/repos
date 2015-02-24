        /*
Создание XMLHttpRequest-объекта
Возвращает созданный объект или null, если XMLHttpRequest не поддерживается
*/
function createRequestObject() {
    var request = null;
    try {
        request=new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e){}
    if(!request) try {
        request=new ActiveXObject('Microsoft.XMLHTTP');
    } catch (e){}
    if(!request) try {
        request=new XMLHttpRequest();
    } catch (e){}
    return request;
}


/*
Кодирование данных (простого ассоциативного массива вида { name : value, ...} в
URL-escaped строку (кодировка UTF-8)
*/
function urlEncodeData(data) {
    var query = [];
    if (data instanceof Object) {
        for (var k in data) {
            query.push(encodeURIComponent(k) + "=" + encodeURIComponent(data[k]));
        }
        return query.join('&');
    } else {
        return encodeURIComponent(data);
    }
}