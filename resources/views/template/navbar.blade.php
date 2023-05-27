

<script>
    const Change = 0;
    const ChangeIcon = true;
    const ChangeStyles = [
        'fixed flex left-[-65%] top-0 h-full border-r border-r-gray-900 bg-gray-500 ease-in-out duration-500',
        'fixed flex left-0 top-0 h-full border-r border-r-gray-900 bg-gray-500 ease-in-out duration-500 justify-center w-[100%]'
    ];
    const [Change, setChange] = useState(0);
    const [ChangeIcon, setChangeIcon] = useState(true);

    const ClickNav = () => {
        Change = (Change + 1) % ChangeStyles.length;
        ChangeIcon = !ChangeIcon;
    }

    const Nav = document.getElementByID("#nav-container")

    const ChangeNavStyle = () => {
        ClickNav();
        document.getElementById("nav-container").className(ChangeStyles[Change])
    }
</script>

<div class="flex">

    <div class=" max-w-[300px] hidden flex-col px-10 pt-16 h-screen bg-[#23273C] text-[#FAFAFA] md:flex justify-between">
        <div class="flex flex-col ">
            <h3 class="w-full text-4xl font-bold text-left">FINEance</h3>
            <ul class="pt-5 text-md">
                <li class="pt-5">Dashboard</li>
                <li class="pt-5">Transaction</li>
                <li class="pt-5">Report</li>
                <li class="pt-5">Subscription</li>
                <li class="pt-5">Customer Center</li>
            </ul>
        </div>
        <div class="mb-8">Option</div>
    </div>

    <div onClick={ClickNav} class="md:hidden" id="nav-container">
        {ChangeIcon ? <img class="w-full" src="{{ asset('assets/customer-center/Frame2766.png') }}"> :
        <AiOutlineClose size={20} class="transition-transform" />}
    </div>
    <div class="hidden" onClick="ChangeNavStyle()" id="nav-container">
        <h3 class="pt-2 text-4xl font-bold fixed bg-gray-500 ml-5">FINEance</h3>
        <ul class="pt-20 ml-5 bg-gray-500">
            <li class=" bg-gray-500 ">HOME</li>
            <li class="pt-3 bg-gray-500 ">ABOUT</li>
            <li class="pt-3 bg-gray-500 ">CONTACT</li>
            <li class="pt-3 bg-gray-500 ">SIGN IN</li>
            <li class="pt-3 bg-gray-500 ">REGISTER</li>
        </ul>
    </div>
</div>
