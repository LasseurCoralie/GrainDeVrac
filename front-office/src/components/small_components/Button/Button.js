import React from 'react';
import PropTypes from 'prop-types';

// == Style
import ButtonStyled from './ButtonStyled';

const Button = ({ content }) => (
  <ButtonStyled>
    <button>{content}</button>
  </ButtonStyled>
);

Button.propTypes = {
  content: PropTypes.string.isRequired
};

export default Button;