function number_format(number)
{
    // convert into string
    var numberString  = number.toString();
    console.log(numberString[2]);
    var newNumberStr = '';
    var lastIndex = numberString.length-1;
    for(var index = lastIndex; index>=0; index--){

        var number = numberString[lastIndex-index];
        newNumberStr+=number;

        if((index)%3==0 && index!==0)
        {
            newNumberStr +=",";
        }
    };
    //newNumberStr = newNumberStr.split('').reverse().join('');
    return newNumberStr;
}