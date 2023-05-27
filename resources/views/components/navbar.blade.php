<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div className={ChangeStyles[Change]} onClick={ClickNav}>
        <h3 className="pt-2 text-4xl font-bold font-play fixed bg-gray-500 text-center ml-5">Otter</h3>
        <ul className="pt-20 ml-5 bg-gray-500 ">
            <li className="p-3 bg-gray-500 ">HOME</li>
            <li className="p-3 bg-gray-500 ">ABOUT</li>
            <li className="p-3 bg-gray-500 ">CONTACT</li>
            <li className="p-3 bg-gray-500 ">SIGN IN</li>
            <li className="p-3 bg-gray-500 ">REGISTER</li>
        </ul>
    </div>
</body>
</html>

const ChangeStyles = ['fixed flex left-[-65%] top-0 h-full border-r border-r-gray-900 bg-gray-500 ease-in-out duration-500','fixed flex left-0 top-0 h-full border-r border-r-gray-900 bg-gray-500 ease-in-out duration-500 justify-center w-[100%]'];
const [Change, setChange] = useState(0);
const [ChangeIcon, setChangeIcon] = useState(true);

const ClickNav = () => {
        setChange( (Change + 1) % ChangeStyles.length);
        setChangeIcon(!ChangeIcon);
}

