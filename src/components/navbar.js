import './App.css';
import a from './src/assets/control.png';
import b from './src/assets/logo.png';
import c from './src/assets/blkj.jpg';


import { useState } from "react";

import { NavLink } from 'react-router-dom';

const Navbar = () => {
    const [open, setOpen] = useState(true);
    const Menus = [
        { title: "Home", src: "Chart_fill", file: "/home" },
        { title: "Inbox", src: "Chat", file: "/inbox" },
        { title: "Account", src: "User", file: "/account", gap: true },
        { title: "Setting", src: "Setting", file: "/setting" },
        { title: "Search", src: "Search", file: "/search" },
        { title: "Analytics", src: "Chart", file: "/analytics" },
        { title: "Logout", src: "Folder", file: "/logout", gap: true },
    ];
    return (
        <div className="flex">
            <div style={{ background: "linear-gradient(#ff80da, #78bfdb)" }}
                className={` ${open ? "w-72" : "w-20 "
                    } bg-dark-purple shadow-2xl bg-white rounded-lg h-screen p-5 pt-8 relative duration-300 `}
            >
                <img
                    src={a}
                    className={`absolute cursor-pointer -right-3 top-9 w-7 border-dark-purple
           border-2 rounded-full  text-xl ${!open && "rotate-180"}`}
                    onClick={() => setOpen(!open)}
                />
                <div className="flex gap-x-4 items-center">
                    <img
                        src={b}
                        className={`cursor-pointer duration-500 ${open && "rotate-[360deg]"
                            }`}
                    />
                    <h1
                        className={`text-white origin-left font-medium font-sans text-3xl duration-200 ${!open && "scale-0"
                            }`}
                    >
                        Eywry
                    </h1>
                </div>
                <ul className="pt-6">
                    {Menus.map((Menu, index) => (
                        <li
                            key={index}
                            className={`flex  rounded-md p-2 cursor-pointer hover:bg-light-white text-gray-800 text-sm items-center gap-x-4 
              ${Menu.gap ? "mt-9" : "mt-2"} ${index === 0 && "bg-light-white"
                                } `}
                        >
                            <img src={require(`./assets/${Menu.src}.png`)} />
                            <span className={`${!open && "hidden"} origin-left duration-200 text-xl`}>
                                {/* {Menu.title} */}
                                <NavLink to={Menu.file}>{Menu.title}</NavLink>
                            </span>
                        </li>
                    ))}
                </ul>
            </div>
        </div>
    );
};
export default Navbar;
