import React from 'react';
import { Route, Switch } from 'react-router-dom';

// == Import components
import HomePage from './views/HomePage/HomePage';
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
        </Switch>
        <Footer />
      </main>
    </div>
);

export default App;