import React from 'react';
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

const App = () => (
    <div>
      <GlobalStyle />
      <main className="main-content">
        <Header /> 
        <Switch>
          <Route exact path="/" component={HomePage} />
          <Route exact path='/catalogue' component={Catalog} />
          <Route exact path='/planning' component={Plannings} />
          <Route exact path='/catalogue/product' component={Product} />
          <Route exact path='/qui-sommes-nous' component={About} />
          <Route exact path="/contact" component={Contact} />
          <Route exact path='/cgv' component={GTC} />
        </Switch>
        <Footer />
      </main>
    </div>
);

export default App;