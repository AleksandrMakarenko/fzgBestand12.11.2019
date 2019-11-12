function openFilter(){
    document.querySelector('[class*="-search"]').classList.toggle('hidden');
}
function openLinks() {
    document.querySelector('.openLinks').classList.toggle('hidden');
}
function resetFilter() {
  location.href=location.origin+location.pathname+'#openFilter';
}
if(location.hash=='#openFilter')
{
    openFilter();
}
