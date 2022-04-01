import React from "react";
import Navbar from "./components/navbar";
import { Switch, Route, Link} from "react-router-dom";

const Home = () =>{
  return (
    <>
      <Navbar />
      <div style={{ background: "F7F7F7" }} className="h-screen flex-1 p-7">
                <figure class="md:flex bg-slate-100 rounded-xl shadow-xl bg-gray rounded-lg p-8 md:p-0">
                    <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src={c} alt="" width="384" height="512" />
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <blockquote>
                            <p class="text-lg font-medium">
                                “Tailwind CSS is the only framework that I've seen scale
                                on large teams. It’s easy to customize, adapts to any design,
                                and the build size is tiny.”
                            </p>
                        </blockquote>
                        <figcaption class="font-medium">
                            <div class="text-sky-500 dark:text-sky-400">
                                Sarah Dayan
                            </div>
                            <div class="text-slate-700 dark:text-slate-500">
                                Staff Engineer, Algolia
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>
    </>
  );
};

const Contact = () =>{
  return (
    <>
      <Navbar />
      <div style={{ background: "F7F7F7" }} className="h-screen flex-1 p-7">
                <figure class="md:flex bg-slate-100 rounded-xl shadow-xl bg-gray rounded-lg p-8 md:p-0">
                    <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src={c} alt="" width="384" height="512" />
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                        <blockquote>
                            <p class="text-lg font-medium">
                                “Tailwind CSS is the only framework that I've seen scale
                                on large teams. It’s easy to customize, adapts to any design,
                                and the build size is tiny.”
                            </p>
                        </blockquote>
                        <figcaption class="font-medium">
                            <div class="text-sky-500 dark:text-sky-400">
                                Sarah Dayan
                            </div>
                            <div class="text-slate-700 dark:text-slate-500">
                                Staff Engineer, Algolia
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>
    </>
  );
};

const App = () => {
  return 
  <Switch>
    <Route exact path="\">
        <Home />
    </Route>

    <Route path="\contact">
        <Contact />
    </Route>
  </Switch>
};