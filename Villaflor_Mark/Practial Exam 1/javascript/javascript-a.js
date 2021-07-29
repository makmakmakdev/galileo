const str = "TheQuickBrownFoxJumpOverTheLazyDog";

let newStr = '';
//distribute the str to an array [...str]
[...str].forEach( (v,i) => {
    if (i == 0) //Upper case the first character then add to string (newStr)
        newStr += v.toUpperCase(); 
    else {
        //Ternary operation,
        //if character is uppercased add space before the character then make it lowercase then add to string (newStr)
        //else retain the casing then add to string (newStr)
        newStr += (v == v.toUpperCase()) ? ` ${v.toLowerCase()}` : v;
    }    
});

console.log(newStr);