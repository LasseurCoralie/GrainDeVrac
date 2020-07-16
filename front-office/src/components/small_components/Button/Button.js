import React from 'react';
import PropTypes from 'prop-types';
import { NavLink } from 'react-router-dom';

// == Style
import ButtonStyled from './ButtonStyled';

const Button = ({ content, link }) => (
  <ButtonStyled>
    <button>{content}</button>
  </ButtonStyled>
);

Button.propTypes = {
  content: PropTypes.string.isRequired
};

export default Button;