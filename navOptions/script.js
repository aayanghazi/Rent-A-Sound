let debit = document.getElementById("debit");
let array = [debit];
let credit = document.getElementById("credit");
let net = document.getElementById("net-banking");
let wallets = document.getElementById("wallets");
let upi = document.getElementById("upi");
let debit_show = document.getElementById('debit_show');
let net_show = document.getElementById('net_show');
let wallets_show = document.getElementById('wallet_show');
let upi_show = document.getElementById('upi_show');
let pay_area = document.getElementsByClassName('pay-area');
let debit_media = document.getElementById('debit_media');
let net_media = document.getElementById('net_media');
function select_option(ele) {
    const before = window.getComputedStyle(ele,'::before');
    if(array.length > 0){
        array[0].classList.remove('flex-display');
        array.pop();
    }
    if(before.display == 'none'){
        ele.classList.add('flex-display');
        array.push(ele);
    }
    else{
        ele.classList.remove('flex-display');
    }
    if(array[0].id == "debit"){
        debit_show.style.display = 'flex';
        credit_show.style.display = 'none';
        net_show.style.display = 'none';
        wallets_show.style.display = 'none';
        upi_show.style.display = 'none';
        debit.style.backgroundColor = 'white';
        credit.style.backgroundColor = 'var(--aside-back)';
        net.style.backgroundColor = 'var(--aside-back)';
        wallets.style.backgroundColor = 'var(--aside-back)';
        upi.style.backgroundColor = 'var(--aside-back)';
        if(window.innerWidth < 770){
            debit.style.marginBottom = "320px";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "0";
            debit_media.style.display = "flex";
            debit_media.style.top = "300px";
            net_media.style.display = "none";
        }
        else{
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "0";
        }
    }
    else if(array[0].id == "credit"){
        debit_show.style.display = 'flex';
        net_show.style.display = 'none';
        wallets_show.style.display = 'none';
        upi_show.style.display = 'none';
        debit.style.backgroundColor = 'var(--aside-back)';
        credit.style.backgroundColor = 'white';
        net.style.backgroundColor = 'var(--aside-back)';
        wallets.style.backgroundColor = 'var(--aside-back)';
        upi.style.backgroundColor = 'var(--aside-back)';
        if(window.innerWidth < 770){
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "320px";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "0";
            debit_media.style.display = "flex";
            debit_media.style.top = "340px";
            net_media.style.display = "none";

        }
        else{
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "0";
        }
    }
    else if(array[0].id == "net-banking"){
        debit_show.style.display = 'none';
        net_show.style.display = 'flex';
        wallets_show.style.display = 'none';
        upi_show.style.display = 'none';
        debit.style.backgroundColor = 'var(--aside-back)';
        credit.style.backgroundColor = 'var(--aside-back)';
        net.style.backgroundColor = 'white';
        wallets.style.backgroundColor = 'var(--aside-back)';
        upi.style.backgroundColor = 'var(--aside-back)';
        debit_media.style.display = "none";
        if(window.innerWidth < 770){
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "320px";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "0";
            net_media.style.display = "flex";
        }
        else{
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "0";
        }
    }
    else if(array[0].id == "wallets"){
        debit_show.style.display = 'none';
        net_show.style.display = 'none';
        wallets_show.style.display = 'flex';
        upi_show.style.display = 'none';
        debit.style.backgroundColor = 'var(--aside-back)';
        credit.style.backgroundColor = 'var(--aside-back)';
        net.style.backgroundColor = 'var(--aside-back)';
        wallets.style.backgroundColor = 'white';
        upi.style.backgroundColor = 'var(--aside-back)';
        debit_media.style.display = "none";
        if(window.innerWidth < 770){
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "320px";
            upi.style.marginBottom = "0";
            net_media.style.display = "none";
        }
        else{
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "0";
        }
    }
    else if(array[0].id == "upi"){
        debit_show.style.display = 'none';
        net_show.style.display = 'none';
        wallets_show.style.display = 'none';
        upi_show.style.display = 'flex';
        debit.style.backgroundColor = 'var(--aside-back)';
        credit.style.backgroundColor = 'var(--aside-back)';
        net.style.backgroundColor = 'var(--aside-back)';
        wallets.style.backgroundColor = 'var(--aside-back)';
        upi.style.backgroundColor = 'white';
        debit_media.style.display = "none";
        if(window.innerWidth < 770){
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "320px";
            net_media.style.display = "none";
        }
        else{
            debit.style.marginBottom = "0";
            credit.style.marginBottom = "0";
            net.style.marginBottom = "0";
            wallets.style.marginBottom = "0";
            upi.style.marginBottom = "0";
        }
    }
}
select_option(document.getElementById("debit"))
window.addEventListener("resize", function(){
    if(window.innerWidth <= 770){
        array[0].style.marginBottom = '320px';
        if(array[0].id == "debit" || array[0].id == "credit"){
            debit_media.style.display = "flex";
        }
    }
    else{
        array[0].style.marginBottom = '0';
        debit_media.style.display = "none";
    }
});