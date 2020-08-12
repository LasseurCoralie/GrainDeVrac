import React, { useState } from 'react';
import { Route, Switch } from 'react-router-dom';

// == Import components
import HomePage from './views/HomePage/HomePage';
import Catalog from './views/Catalog/Catalog';
import Plannings from './views/Plannings/Plannings';
import Product from './views/Product/Product';
import About from './views/About/About';
import Contact from './views/Contact/Contact';
import GTC from './views/GTC/GTC';
import Header from './small_components/Header/Header';
import Footer from './small_components/Footer/Footer';

// == Import Style
import GlobalStyle from './GlobalStyle';

const App = () => {

  const [menuBurger, setMenuBurger] = useState(false);

  const handleClickClose = (evt) => {

    // Pour fermer le menu quand on clique sur la page
    if (menuBurger === true) {
      setMenuBurger(false)
    }

    console.log(!menuBurger);
    // Gestion de l'ouverture et de la fermeture du menu
    if (evt.target.classList[1] === "burgerMenu") {
      if (!menuBurger) {
        setMenuBurger(true);
      } else {
        setMenuBurger(false);
      }
    }
  }

  if (window.innerWidth > 1099 && !menuBurger) {
    setMenuBurger(true);
  }

  console.log(menuBurger, window.innerWidth);

  return(
    <div onClick={handleClickClose}>
      <GlobalStyle />
      <main className="main-content">
        <Header menuBurger={menuBurger} />
        <div className="content">
          <Switch>
            <Route exact path="/" component={HomePage} />
            <Route exact path='/catalogue' component={Catalog} />
            <Route exact path='/planning' component={Plannings} />
            <Route exact path='/catalogue/product' component={Product} />
            <Route exact path='/qui-sommes-nous' component={About} />
            <Route exact path="/contact" component={Contact} />
            <Route exact path='/cgv' component={GTC} />
          </Switch>
        </div>
        <Footer />
      </main>
    </div>
  )
};

export default App;