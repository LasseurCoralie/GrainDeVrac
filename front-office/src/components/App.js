import React from 'react';
import HomePage from './views/HomePage/HomePage'

// == Import Style
import GlobalStyle from './GlobalStyle';

const App = () => (
    <div>
      <GlobalStyle />
      <HomePage />
    </div>
);

export default App;